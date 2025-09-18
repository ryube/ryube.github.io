import fs from "node:fs";
import path from "node:path";
import matter from "gray-matter";
import { remark } from "remark";
import html from "remark-html";

const postsDirectory = path.join(process.cwd(), "content", "posts");

type FrontMatter = {
  title?: string;
  description?: string;
  date?: string;
};

export type PostSummary = {
  slug: string;
  title: string;
  description: string;
  date: string;
};

export type Post = PostSummary & {
  contentHtml: string;
};

function assertDirectoryExists() {
  if (!fs.existsSync(postsDirectory)) {
    throw new Error(`Missing posts directory: ${postsDirectory}`);
  }
}

export async function getPostSlugs() {
  assertDirectoryExists();
  return fs
    .readdirSync(postsDirectory)
    .filter((file) => file.endsWith(".md"))
    .map((file) => file.replace(/\.md$/, ""));
}

function mapFrontMatter(slug: string, data: FrontMatter): PostSummary {
  const title = data.title?.trim();
  const description = data.description?.trim();
  const date = data.date?.trim();

  if (!title || !description || !date) {
    throw new Error(`Markdown file \"${slug}.md\" is missing required front matter.`);
  }

  return { slug, title, description, date };
}

export async function getAllPosts(): Promise<PostSummary[]> {
  const slugs = await getPostSlugs();

  const posts = slugs.map((slug) => {
    const fullPath = path.join(postsDirectory, `${slug}.md`);
    const fileContents = fs.readFileSync(fullPath, "utf8");
    const { data } = matter(fileContents);

    return mapFrontMatter(slug, data as FrontMatter);
  });

  return posts.sort((a, b) => (a.date > b.date ? -1 : 1));
}

export async function getPostBySlug(slug: string): Promise<Post> {
  const fullPath = path.join(postsDirectory, `${slug}.md`);

  if (!fs.existsSync(fullPath)) {
    throw new Error(`Unknown post slug: ${slug}`);
  }

  const fileContents = fs.readFileSync(fullPath, "utf8");
  const { data, content } = matter(fileContents);
  const meta = mapFrontMatter(slug, data as FrontMatter);

  const processedContent = await remark().use(html).process(content);
  const contentHtml = processedContent.toString();

  return { ...meta, contentHtml };
}

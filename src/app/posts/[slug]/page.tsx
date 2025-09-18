import { notFound } from "next/navigation";
import Link from "next/link";
import { getPostBySlug, getPostSlugs } from "@/lib/posts";

export async function generateStaticParams() {
  const slugs = await getPostSlugs();
  return slugs.map((slug) => ({ slug }));
}

export async function generateMetadata({
  params,
}: {
  params: Promise<{ slug: string }>;
}) {
  const { slug } = await params;

  try {
    const post = await getPostBySlug(slug);
    return {
      title: post.title,
      description: post.description,
    };
  } catch (error) {
    return {};
  }
}

export default async function PostPage({
  params,
}: {
  params: Promise<{ slug: string }>;
}) {
  const { slug } = await params;

  try {
    const post = await getPostBySlug(slug);

    return (
      <div className="min-h-screen bg-slate-950 text-slate-50">
        <div className="mx-auto flex w-full max-w-3xl flex-col gap-10 px-6 py-16 sm:px-8">
          <Link
            href="/"
            className="text-sm font-medium text-slate-400 transition hover:text-slate-200"
          >
            ← Back to posts
          </Link>
          <article className="markdown-body">
            <p className="text-sm uppercase tracking-[0.3em] text-slate-400">
              {new Date(post.date).toLocaleDateString("ko-KR")}
            </p>
            <h1 className="mb-4 text-4xl font-semibold text-slate-50">
              {post.title}
            </h1>
            <p className="text-lg text-slate-300">{post.description}</p>
            <hr className="my-8 border-slate-800" />
            <div
              className="markdown-body__content"
              dangerouslySetInnerHTML={{ __html: post.contentHtml }}
            />
          </article>
        </div>
      </div>
    );
  } catch (error) {
    notFound();
  }
}

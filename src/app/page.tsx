import Link from "next/link";
import { getAllPosts } from "@/lib/posts";

export default async function Home() {
  const posts = await getAllPosts();

  return (
    <div className="min-h-screen bg-gradient-to-br from-slate-900 via-slate-950 to-slate-900 text-slate-100">
      <div className="mx-auto flex w-full max-w-4xl flex-col gap-12 px-6 py-16 sm:px-12">
        <header className="flex flex-col gap-4">
          <p className="text-sm uppercase tracking-[0.4em] text-slate-400">
            Ryube Studio
          </p>
          <h1 className="text-4xl font-semibold sm:text-5xl">Creative Technology &amp; UX</h1>
          <p className="max-w-2xl text-base text-slate-300 sm:text-lg">
            Next.js 정적 사이트로 재구성한 포트폴리오입니다. 마크다운으로 작성한
            작업 기록과 노트를 정리하고, 필요할 때 쉽게 확장할 수 있도록 빌드
            파이프라인을 구성했습니다.
          </p>
          <div>
            <Link
              href="/legacy/"
              className="inline-flex items-center gap-2 rounded-full border border-slate-700 bg-slate-900/60 px-4 py-2 text-sm font-medium text-slate-200 transition hover:border-slate-500 hover:bg-slate-800/80"
            >
              Legacy 2020 보기
            </Link>
          </div>
        </header>

        <section className="grid gap-6 md:grid-cols-2">
          {posts.map((post) => (
            <article
              key={post.slug}
              className="group flex h-full flex-col justify-between rounded-2xl border border-slate-800 bg-slate-900/70 p-6 shadow-lg shadow-slate-950/30 transition hover:border-slate-500 hover:shadow-slate-900/40"
            >
              <div className="flex flex-col gap-3">
                <p className="text-xs font-medium uppercase tracking-[0.3em] text-slate-400">
                  {new Date(post.date).toLocaleDateString("ko-KR")}
                </p>
                <h2 className="text-2xl font-semibold text-slate-50 transition group-hover:text-white">
                  <Link href={`/posts/${post.slug}`}>{post.title}</Link>
                </h2>
                <p className="text-sm text-slate-300">{post.description}</p>
              </div>
              <Link
                href={`/posts/${post.slug}`}
                className="mt-6 inline-flex items-center gap-2 text-sm font-medium text-sky-400 transition group-hover:text-sky-300"
              >
                Read more →
              </Link>
            </article>
          ))}
        </section>
      </div>
    </div>
  );
}

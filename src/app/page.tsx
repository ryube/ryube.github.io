export default function Home() {
  return (
    <main className="min-h-screen bg-slate-950 text-slate-100">
      <div className="mx-auto flex max-w-3xl flex-col gap-10 px-6 py-20 sm:px-12">
        <div>
          <h1 className="text-4xl font-semibold text-white">Ryube</h1>
          <p className="mt-3 max-w-2xl text-base text-slate-400">
            지금은 홈에 링크만 남겨두었습니다. 나중에 다시 채우겠습니다.
          </p>
        </div>

        <div className="grid gap-4">
          <a
            href="/legacy/"
            className="rounded-2xl border border-slate-700 bg-slate-900/80 px-5 py-4 text-base font-medium text-slate-100 transition hover:border-slate-500 hover:bg-slate-800"
          >
            Legacy 2020
          </a>
          <a
            href="/vicsek-art/index.html"
            className="rounded-2xl border border-slate-700 bg-slate-900/80 px-5 py-4 text-base font-medium text-slate-100 transition hover:border-slate-500 hover:bg-slate-800"
          >
            Vicsek Art
          </a>
          <a
            href="/legacy/neowiz_works/nps_official/index.html"
            className="rounded-2xl border border-slate-700 bg-slate-900/80 px-5 py-4 text-base font-medium text-slate-100 transition hover:border-slate-500 hover:bg-slate-800"
          >
            NPS Official
          </a>
        </div>
      </div>
    </main>
  );
}

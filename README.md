# Ryube Portfolio

Next.js 15 + Tailwind CSS 4 기반으로 만든 정적 포트폴리오 사이트입니다. 모든 콘텐츠는 마크다운 파일에서 작성하며 빌드 타임에 HTML로 변환됩니다.

## 구조

- `content/posts`: 게시물 마크다운 파일과 메타데이터(제목, 설명, 날짜)
- `public/legacy/2020`: 기존 GitHub Pages 정적 사이트 백업 경로
- `src/lib/posts.ts`: 마크다운 파서를 포함한 데이터 유틸리티

## 개발

```bash
pnpm install
pnpm dev
```

브라우저에서 [http://localhost:3000](http://localhost:3000)을 열어 확인합니다.

## 정적 빌드 & 배포

```bash
pnpm build
pnpm dlx serve@latest out
```

1. `pnpm build`로 Next.js SSG를 실행하면 `out` 폴더가 생성됩니다.
2. `serve` 혹은 GitHub Pages로 `out` 디렉터리를 배포하면 됩니다.

## 콘텐츠 추가 방법

1. `content/posts` 폴더에 새로운 `.md` 파일을 생성합니다.
2. 다음과 같이 Front Matter를 포함해야 합니다.

```md
---
title: "새 글 제목"
description: "간단한 설명"
date: "2025-01-01"
---

마크다운 본문을 작성하세요.
```

3. 빌드 시 자동으로 목록 페이지와 상세 페이지가 생성됩니다.

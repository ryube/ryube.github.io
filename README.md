# Ryube Portfolio

Next.js 15 + Tailwind CSS 4 기반으로 만든 정적 포트폴리오 사이트입니다. 모든 콘텐츠는 마크다운 파일에서 작성하며 빌드 타임에 HTML로 변환됩니다.

## 구조

- `/`: 기본 프로필 & 이력서 개요
- `/blog`: 마크다운 기반 블로그 목록 및 상세
- `/legacy`: 2020 GitHub Pages 백업
- `content/posts`: 게시물 마크다운/프론트매터 저장 위치
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

## 로컬 글 작성 도구

- 개발 서버 실행 후 [http://localhost:3000/writer](http://localhost:3000/writer)에 접속하면 간단한 폼으로 새 글 템플릿을 생성할 수 있습니다.
- 개발 모드(`pnpm dev`)에서만 접근 가능하며, 제출 시 `content/posts`에 마크다운 파일이 저장됩니다.
- 빌드 파이프라인에서는 자동으로 제외되어 GitHub Pages에는 노출되지 않습니다.

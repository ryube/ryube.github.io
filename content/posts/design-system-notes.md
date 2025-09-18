---
title: "Design System 정리"
description: "UI 토큰과 컴포넌트 문서화를 위한 기록."
date: "2024-12-15"
---

## 핵심 토큰

- 컬러는 `@theme inline`에서 정의하고 Tailwind 유틸리티로 노출합니다.
- 타이포그래피는 Geist 폰트를 기본으로 사용합니다.

## 작업 플로우

1. 마크다운 파일에서 메타데이터를 작성합니다.
2. `npm run build`를 실행하면 Next.js가 모든 포스트를 정적 HTML로 내보냅니다.
3. GitHub Pages에 `out` 디렉터리를 업로드하면 배포가 끝납니다.

### TODO

- 프로젝트별 스냅샷 추가
- 접근성 점검 체크리스트 작성

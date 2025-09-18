import type { Metadata } from "next";
import "./globals.css";

export const metadata: Metadata = {
  metadataBase: new URL("https://ryube.github.io"),
  title: {
    default: "Ryube Portfolio",
    template: "%s | Ryube Portfolio",
  },
  description: "Ryube의 프로덕트, 인터랙션 디자인 포트폴리오",
  openGraph: {
    title: "Ryube Portfolio",
    description: "Ryube의 프로덕트, 인터랙션 디자인 포트폴리오",
    type: "website",
    url: "https://ryube.github.io",
  },
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="ko">
      <body className="min-h-screen antialiased">{children}</body>
    </html>
  );
}

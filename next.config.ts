import type { NextConfig } from "next";

const nextConfig: NextConfig = {
  output: "export",
  images: {
    unoptimized: true,
  },
  trailingSlash: true,
  async rewrites() {
    return [
      {
        source: "/legacy",
        destination: "/legacy/index.html",
      },
      {
        source: "/legacy/",
        destination: "/legacy/index.html",
      },
    ];
  },
};

export default nextConfig;

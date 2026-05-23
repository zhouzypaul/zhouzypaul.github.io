# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this is

Paul Zhou's personal academic website, built on the [Minimal Mistakes](https://mmistakes.github.io/minimal-mistakes/) Jekyll theme. Deployed to GitHub Pages at `https://zhouzypaul.github.io`.

## Local development

```bash
# Serve with live reload
bundle exec jekyll serve --livereload

# Force production environment (e.g. to test Disqus comments)
JEKYLL_ENV=production bundle exec jekyll serve --livereload
```

After changing `_config.yml`, restart the server — it is not hot-reloaded.

## Where content lives

| File/Dir | Purpose |
|---|---|
| `index.md` | Landing page (bio, Recent News) |
| `_pages/research.md` | Publications list |
| `_pages/experience.html` | Work/research experience |
| `_pages/portfolio.html` | Project portfolio |
| `_data/navigation.yml` | Navigation bar links |
| `assets/css/styles.css` | Custom CSS (paper skill tags, layout tweaks) |
| `images/` | Profile photos and paper thumbnail images |
| `pdfs/` | CV and paper posters |
| `_includes/footer.html` | Footer social links |

## How publications are added

Each publication in `_pages/research.md` is an HTML `<table>` row: left cell has an image or video thumbnail (280px wide), right cell has title, author list, venue, links, and a short description paragraph. Papers with `class="paper-highlight"` get a yellow background to mark selected/featured work. Skill tags use `<div class="skills"><span class="skill">...</span></div>` inside the right cell.

## Jekyll structure notes

- Theme: Minimal Mistakes (local gemspec, not remote theme)
- Layouts used: `splash` (full-width, no sidebar) for all main pages; `single` (with author sidebar) for posts
- `_site/` is auto-generated and should not be edited directly
- JS is minified into `assets/js/main.min.js` via `npm run build:js`

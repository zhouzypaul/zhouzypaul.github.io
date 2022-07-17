# Personal website
This is the code for my personal website.

### Credits
I built my website using code and inspiration from many that came before me, including:
- the [Minimal Mistakes](https://mmistakes.github.io/minimal-mistakes/) theme
- the overall design of [Nishanth Kumar's](https://nishanthjkumar.com) website
- the `Experience` page is inspired by that of [Lizhi Yang's](https://lzyang2000.github.io)
and all the wonderful people that they referenced. 

### Usage
Building a good website is a lot of work if you start from scratch. If you want your website to look like the one I have, 
you may use the code I have in this repo. I would appreciate if you would reference me when you use this code.

You may fork or clone this repo and use it as you wish, though I provide no warranties. All you need is stuff from the main branch, as the other branches contain old versions of my website that looks completely different.

### Customization and Code Structure
- `_config.yml`: this is the configuration file. You have to restart the local server to reflect changes when developping locally. 
- `_data/navigation.yml`: where you customize the navigation bar. 
- `_pages/`: where I put my actual content pages, in HTML and Markdown format.
- `index.md`: this is the main landing page. 
- `assets/css/styles.css`: where I put my custom CSS.
- `docs`, `images`, `pdfs`: my data directories. 

### Local dev
```bash
bundle exec jekyll serve --livereload
```

### Resources Links
Here are some resources/documentation that I've found useful when building the website:
- getting started with Jekyll: [Jekyll](https://jekyllrb.com/)
- configuring [Minimal Mistakes](https://mmistakes.github.io/minimal-mistakes/docs/configuration/)
- Minimal Mistakes's [Github repo page](https://github.com/mmistakes/minimal-mistakes)
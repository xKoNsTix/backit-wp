#Before WP

#!/bin/sh
# npx sass ./src/sass/style.scss ./dist/style.css
# cp ./src/index.html ./dist/
# cp ./src/about.html ./dist/
# cp ./src/shop.html ./dist/


# cp -R ./src/images ./dist/
# cp -R ./src/fonts ./dist/fonts

# npx esbuild ./src/js/main.js --bundle --outfile=./dist/main.js  --minify

#After WP
npx sass ./src/sass/style.scss ./public/wp-content/themes/ben/style.css
# cp ./src/favicons/*.* ./public/wp-content/themes/ben

cp ./src/php/*.* ./public/wp-content/themes/ben
cp ./src/php/template-parts/*.* ./public/wp-content/themes/ben
cp -r./src/images ./public/wp-content/themes/ben/images
cp ./src/wordpress/*.* ./public/wp-content/themes/ben
cp -r ./src/fonts ./public/wp-content/themes/ben/fonts
npx esbuild ./src/js/main.js --bundle --outfile=./public/wp-content/themes/ben/js/main.js  --minify
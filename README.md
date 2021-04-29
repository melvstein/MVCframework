# PHP MVC template

change the .htaccess RewriteBase directory base on your directory.

I installed eloquent using composer require illuminate/database.
I autoload the models by adding
 "autoload": {
        "classmap": [
            "app/models"
        ]
    }

in the composer.json then run the composer dump-autoload    

------------------------------------------------
to install tailwindcss.

run
- npm init -y
- npm install -D tailwindcss@latest postcss@latest autoprefixer@latest
- npx tailwindcss init

- mkdir src/css
- touch src/css/tailwind.css

add this into tailwind.css

@tailwind base;
@tailwind components;
@tailwind utilities;

add this into package.json scripts
- "tw:build": "tailwindcss build ./src/css/tailwind.css -o ./public/css/tailwind.css",
- "tw:watch": "onchange 'tailwind.config.js' 'src/**/*.css' -- npm run tw:build"

then run

- npm run tw:build
- npm run tw:watch
--------------------------------------

to install jquery

run npm install jquery then import $ from 'jquery'



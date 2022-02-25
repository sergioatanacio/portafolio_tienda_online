<?php

#shell_exec('git pull origin master && git pull origin desarrollo');

shell_exec(
    ' start pug -w --pretty resources/pug/pug_public -o ./public &&'.
    ' start sass --watch resources/scss/scss_public:public/css\\ &&'.
    ' code .  && cd public && start php -S localhost:8000 && cd ../ && ls -lha  '.
    ' '
);


/* 
Comando de instalación de pug
- npm install pug
- Extensión .pug

Comando de instalación de sass
- npm install node-sass
- Extensión .scss

- npm install -g sass
- sass --watch input.scss output.css
- sass --watch app/sass:public/stylesheets
*/
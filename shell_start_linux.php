<?php

#shell_exec('git pull origin master && git pull origin desarrollo');

shell_exec(
    ' pug -w --pretty resources/pug/pug_public -o ./public &&'.
    ' sass --watch resources/scss/scss_public:public/css\\ &&'.
    ' code .  && cd public && php -S localhost:8000 && cd ../ && ls -lha  '.
    ' ');
?>

/*
	Usar los siguientes comandos para ejecutar sin errores:
	sudo npm install pug -g
	sudo npm install node-sass -g
	sudo npm install sass -g
*/

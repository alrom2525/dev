<?php
Locale agregar multi lenguaje en Laravel

List of 73 languages for Laravel 5 and Laravel 6
https://github.com/caouecs/Laravel-lang 

Laravel Language Switcher 9:34
https://www.youtube.com/watch?v=KqzGKg8IxE4

Laravel 5.8 Tutorial From Scratch - e51 - Localization, Translations & Language Files
https://www.youtube.com/watch?v=ymdcTOXXSBY



App::setLocale('fr'); // Establece el idioma de la aplicacion

App::getLocale(); // Muestra el idioma configurado
App::isLocale('fr');
Agregar la carpeta lan/fr con todos sus archivos
Crear un controlador para el cambio de idioma

Every route we need to add the followin parameter: app()->getLocale()
Example:
original: <a href="{{ route('login'), app()->getLocale() }}">Login</a>
with change: <a href="{{ route('login' }}">Login</a>
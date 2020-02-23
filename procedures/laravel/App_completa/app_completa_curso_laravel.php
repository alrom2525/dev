<?php
Curso Laravel. Aplicación completa I. Vídeo 57


https://www.youtube.com/watch?v=gr16GSD0Clo&list=PLU8oAlHdN5Bk-qkvjER90g2c_jVmpAHBh&index=57
---------------------------------------------------------------------
Comenzamos a elaborar en este vídeo una aplicación completa con todo lo aprendido hasta ahora y nuevas cosas que irán surgiendo sobre la marcha.

En el Model user (crear una relacion con la tabla usuarios, para establecer que perfil tendra el usuario)

    public function role(){
        return $this->belonsTo('App\Role');
    }

Agregar el campo role_id en el archivo migrations: 2014_10_12_000000_create_users_table.php
	$table->integer('role_id')->index();

---------------------------------------------------------------------

Curso Laravel. Aplicación completa II. Vídeo 58
https://www.youtube.com/watch?v=IVSbJFeVc1I&list=PLU8oAlHdN5Bk-qkvjER90g2c_jVmpAHBh&index=58
En este vídeo creamos las rutas del administrador para en un futuro crear las páginas de sus propios menús: página principal, creación de usuario, modificación, eliminación etc.

Archivo routes/web.php
	Route::resource('admin/users','AdminUsersController');

y crear su controlador:
	php artisan make:controller --resource AdminUsersController


<?php 
Controllers
https://laravel.com/docs/6.x/controllers
---------------------------------------------------------------------

Curso Laravel. Controllers I Controladores. Vídeo 7
https://www.youtube.com/watch?v=PqFGnXCJl1E&list=PLU8oAlHdN5Bk-qkvjER90g2c_jVmpAHBh&index=7
Cómo crear controladores de forma manual.


Es posible hacer subdirectorios para organizar los controladores (asi como el directorio Auth)
../app/Http/Controllers

namespace se usa para no crear conflicto con otras clases, metodos, o variables que puedan ir creando los usuarios ya que una de las principales caracteristicas del Framework Laravel es que permite trabajar en equipo, entonces puede ser frecuente que alguien cree una funcion con un nombre que ya exista (creada por otro miembro del equipo).
namespace es como un directorio en un sistema operativo, en donde puede crearse clases, metodos, variables, etc. Y eso se hace para que estos no colisionen con otros.

Un controlador se puede crear de forma manual o por la terminal


class PostsController extends Controller
{   
    public function inicio()
    {
        return "Estas en el inicio del sitio";
    }
}

diferencias de isset is_null y empty diferencias en php

https://cybmeta.com/isset-is_null-y-empty-diferencias-y-ejemplos-de-uso

CYBMETA
Sobre mí
WordPress
PHP
HTML
JavaScript
CSS
SEO
isset(), is_null() y empty(): Diferencias y ejemplos de uso PHP
 Juan PadialPublicado el 19 junio, 2014 - Actualizado el 2 febrero, 2016

 
En PHP tenemos diferentes funciones para comprobar una variable independientemente del tipo de datos que almacene. Puede que las tres funciones más populares y frecuentemente utilizadas para este fin sean isset(), is_null() y empty(). Las tres devuelve un valor lógico true/false y en muchos casos utilizar cualquiera de ellas puede ser indiferente, en otros podemos encontrarnos con situaciones inesperadas.

En general, se suele entender is_null() como opuesta a isset(), y esta como opuesta a empty(). En este tutorial veremos como esto no es del todo cierto e intentaré explicar las peculiaridades de cada una de estas funciones para poder utilizarlas de forma correcta.

1
is_null
Echemos mano al manual PHP para is_null(). Dice así:

is_null — Comprueba si una variable es NULL

Por tanto, esta función devolverá true cuándo la variable comprobada tenga un valor NULL (nulo). En PHP NULL se considera un valor especial que representa a una variable sin valor, lo que puede ocurrir cuándo la variable no haya sido definida, cuándo esté definida pero sin valor asignado, cuándo se le asigne el valor NULL o cuándo haya sido destruida con usent().


 
//La variable no está definida
// Devuelve true y lanza un aviso tipo Notice: undefined variable
var_dump( is_null($var) );

//Se asigna la constante NULL
$var = NULL;
var_dump( is_null($var) );

//Se declara la variable pero no se le asigna ningún valor
$var;
var_dump( is_null($var) );

//La variable es destruida con unset()
$var = "Hola";
unset($var);
var_dump( is_null($var) );
En los cuatro casos anteriores is_null($var) devuelve true. Además, en el primer caso cuándo $var no ha sido definida, y en el último caso cuándo $var ha sido destruida, se lanzará un error tipo Notice: Undefined variable. Por el contrario, si se utilizan variables no definidas con isset() y empty() no aparecerá ningún tipo de aviso.

2
isset()
La función isset(), según el manual PHP, determina si una variable ha sido declarada y su valor no es NULO. Es importante fijarse bien: si una variable tiene valor nulo, aunque haya sido declarada, isset() devolverá false. En todos los ejemplos anteriores para is_null(), isset() devolvería false mientras que is_null() devolvió true, por eso se consideran funciones opuestas. También es importante fijarse que isset() devuelve true para variables con valores vacíos, por ejemplo, cadenas de texto vacías:

//isset() devuelve false por que $var no ha sido definida
var_dump( isset($var) );

//isset() devuelve false aunque la variable haya sido declarada pues su valor es NULL
$var;
var_dump( isset($var) );

//isset() devuelve true. El valor ya no es nulo aunque esté vacío
$var = "";
var_dump( isset($var) );
Referencia: manual isset().

3
empty()
Echemos mano de nuevo al manual a ver que dice de la función empty():

empty — Determina si una variable está vacía

La definición es muy sencilla pero abarca muchos posibles escenarios. 
Una variable se considera vacía si no existe (aquí coincide con isset() y con is_null()) 
o si su valor es false. El valor false para una variable puede ser un valor lógico false, 
una cadena vacía, el número 0 (cero), un array vacío, el valor NULL y, 
aquí la peculiaridad, el string "0" (no como valor numérico, sino como cadena de texto) 
también dará positivo en la función empty().

//La variable no está definida. empty() devuelve true
var_dump( empty($var) );

//empty() devuelve true. El valor de $var es nulo
$var;
var_dump( empty($var) );

//empty() devuelve true para un string vacío
$var = "";
var_dump( empty($var) );

//empty() devuelve true para un array vacío
$var = array();
var_dump( empty($var) );

//empty() devuelve true para el string "0"
$var = "0";
var_dump( empty($var) );

//empty() devuelve true para el número entero 0
$var = 0;
var_dump( empty($var) );

//empty() devuelve true para el valor lógico false
$var = false;
var_dump( empty($var) );

//empty() devuelve false para el valor lógico true
$var = true;
var_dump( empty($var) );
Referencia: manual empty().

¿Cuándo utilizar cada una?
Esta es una pregunta con muy difícil respuesta y depende de cada situación. Lo más que puedo hacer es decir lo que yo suelo hacer:

Utilizo empty() con mucha más frecuencia que las demás y lo hago si necesito comprobar que una variable no tiene un valor vacío pero no es estrictamente necesario comprobar que la variable haya sido declarada. Si la variable no existe empty() devuelve true pero no lanza error. Si la cadena de texto «0» es un valor válido y posible para la variable a comprobar no se debe utilizar empty() por considerar este valor como vacío.
Utilizo isset() sólo cuándo necesito comprobar que una variable existe y no es nula aunque tenga un valor vacío.
Dejo is_null() para pocos casos y son aquellos en los que es necesario comprobar específicamente que 
una variable sea nula o no exista.
Si necesito hacer una comparación estricta pero no se si la variable ha sido declarada, 
lo compruebo previamente con isset().
Tabla comparativa
Esta tabla ha sido tomada de aquí y ampliada para los posibles valores de $x de espacio y NULL byte ("\0"). Nota que if($x) cuándo $x no existe se interpreta como false pero lanzará un error tipo NOTICE.

Comprobación de una variable con diferentes funciones PHP
Expresión	gettype()	empty()	is_null()	isset()	boolean: if($x)
$x = «»;	string	TRUE	FALSE	TRUE	FALSE
$x = » «; (espacio)	string	FALSE	FALSE	TRUE	TRUE
$x = null;	NULL	TRUE	TRUE	FALSE	FALSE
$x = «\0»; (NULL byte)	string	FALSE	FALSE	TRUE	TRUE
var $x;	NULL	TRUE	TRUE	FALSE	FALSE
$x is indefinida	NULL	TRUE	TRUE	FALSE	FALSE
$x = array(); (array vacío)	array	TRUE	FALSE	TRUE	FALSE
$x = false;	boolean	TRUE	FALSE	TRUE	FALSE
$x = true;	boolean	FALSE	FALSE	TRUE	TRUE
$x = 1;	integer	FALSE	FALSE	TRUE	TRUE
$x = 42;	integer	FALSE	FALSE	TRUE	TRUE
$x = 0;	integer	TRUE	FALSE	TRUE	FALSE
$x = -1;	integer	FALSE	FALSE	TRUE	TRUE
$x = «1»;	string	FALSE	FALSE	TRUE	TRUE
$x = «0»;	string	TRUE	FALSE	TRUE	FALSE
$x = «-1»;	string	FALSE	FALSE	TRUE	TRUE
$x = «Hola!»;	string	FALSE	FALSE	TRUE	TRUE
$x = «true»;	string	FALSE	FALSE	TRUE	TRUE
$x = «false»;	string	FALSE	FALSE	TRUE	TRUE
Todo el contenido bajo licencia WTFPL. - Uso de cookies y política de privacidad
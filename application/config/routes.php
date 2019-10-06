<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**/

$l                                        = '^(en|es|de|it|po)/';
$i                                        = '^(en|es|de|it|po)';

/**/




$route[$l.'pedidos']                        = 'Pedidocontroller';  // aqui carga el listar 
$route[$l.'pedidos/(:num)']                 = 'Pedidocontroller/create/$1/$2';  // con esta ruta nos manda a la vista crear si le mandamos un cero , pero si le mandamos otro id nos devuelve los datos de ese pedido
$route[$l.'pedidos/create']                 = 'Pedidocontroller/create_one';
$route[$l.'pedidos/edit']                   = 'Pedidocontroller/edit_one';





$route[$l.'inicio']                 		= 'Clientecontroller';
$route[$l.'login']                 		= 'Logincontroller';



$route['default_controller']               = 'Welcome';


/*****dashboard ******/


$route[$l.'form_editor_aceeditor']                 		= 'Forms/editors_aceeditor';


/*****forms ******/

$route[$l.'(.+)$']                        = "$2";
$route[$i.'$']                            = $route['default_controller'];


/**/

$route['translate_uri_dashes']            = TRUE;
$route['404_override']                    = 'Welcome/error404';
$route['403_override']                    = 'Welcome/error403';
$route['503_override']                    = 'Welcome/error503';
$route['504_override']                    = 'Welcome/error504';
/**/


?>
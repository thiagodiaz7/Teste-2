<?php
/*
Plugin Name: Controle de Estoque
Description:
Version: 1
Author: Thiago Dias
Author URI: github.com/thiagodiaz7/
*/

//menu items
add_action('admin_menu','loja_produtos_modifymenu');
function loja_produtos_modifymenu() {
	
	//this is the main item for the menu
	add_menu_page('produtos', //page title
	'Produtos', //menu title
	'manage_options', //capabilities
	'loja_produtos_list', //menu slug
	loja_produtos_list //function
	);
	
	//this is a submenu
	add_submenu_page('loja_produtos_list', //parent slug
	'Adicionar Novo Produto', //page title
	'Adicionar', //menu title
	'manage_options', //capability
	'loja_produtos_create', //menu slug
	'loja_produtos_create'); //function
	
	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
	'Atualizar Produtos', //page title
	'Atualizar', //menu title
	'manage_options', //capability
	'loja_produtos_update', //menu slug
	'loja_produtos_update'); //function
}

add_action('admin_menu','loja_clientes_modifymenu');
function loja_clientes_modifymenu() {
	
	//this is the main item for the menu
	add_menu_page('clientes', //page title
	'Clientes', //menu title
	'manage_options', //capabilities
	'loja_clientes_list', //menu slug
	loja_clientes_list //function
	);
	
	//this is a submenu
	add_submenu_page('loja_clientes_list', //parent slug
	'Adicionar Clientes', //page title
	'Adicionar', //menu title
	'manage_options', //capability
	'loja_clientes_create', //menu slug
	'loja_clientes_create'); //function
	
	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
	'Update Clientes', //page title
	'Update', //menu title
	'manage_options', //capability
	'loja_clientes_update', //menu slug
	'loja_clientes_update'); //function
}
add_action('admin_menu','loja_pedidos_modifymenu');
function loja_pedidos_modifymenu() {
	
	//this is the main item for the menu
	add_menu_page('pedidos', //page title
	'Pedidos', //menu title
	'manage_options', //capabilities
	'loja_pedidos_list', //menu slug
	loja_pedidos_list //function
	);
	
	//this is a submenu
	add_submenu_page('loja_pedidos_list', //parent slug
	'Adicionar Pedido', //page title
	'Adicionar', //menu title
	'manage_options', //capability
	'loja_pedidos_create', //menu slug
	'loja_pedidos_create'); //function
	
	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
	'Update Pedidos', //page title
	'Update', //menu title
	'manage_options', //capability
	'loja_pedidos_update', //menu slug
	'loja_pedidos_update'); //function
}
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'produtos-list.php');
require_once(ROOTDIR . 'produtos-create.php');
require_once(ROOTDIR . 'produtos-update.php');
require_once(ROOTDIR . 'clientes-list.php');
require_once(ROOTDIR . 'clientes-create.php');
require_once(ROOTDIR . 'clientes-update.php');
require_once(ROOTDIR . 'pedidos-list.php');
require_once(ROOTDIR . 'pedidos-create.php');
require_once(ROOTDIR . 'pedidos-update.php');




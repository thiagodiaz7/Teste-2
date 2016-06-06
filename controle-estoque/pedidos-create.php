<?php
function loja_pedidos_create () {
$id_produto = $_POST["id_produto"];
$id_cliente = $_POST["id_cliente"];
//insert
if(isset($_POST['insert'])){
	global $wpdb;
	$wpdb->insert(
		'pedidos', //table
		array('id_produto' => $id_produto,'id_cliente' => $id_cliente), //data
		array('%s','%s') //data format			
	);
	$message.="pedidos inserted";
}
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/loja-pedidos/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>Adicionar Novo Produto</h2>
<?php if (isset($message)): ?><div class="updated"><p><?php echo $message;?></p></div><?php endif;?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
<table class='wp-list-table widefat fixed'>
<tr><th>ID Produto</th><td><input type="text" name="id" value="<?php echo $id_produto;?>"/></td></tr>
<tr><th>ID Cliente</th><td><input type="text" name="name" value="<?php echo $id_cliente;?>"/></td></tr>
</table>
<input type='submit' name="insert" value='Save' class='button'>
</form>
</div>
<?php
}
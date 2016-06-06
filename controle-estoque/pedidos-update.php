<?php
function loja_pedidos_update () {
global $wpdb;
$id_produto = $_GET["id_produto"];
$id_cliente=$_POST["id_cliente"];
//update
if(isset($_POST['update'])){	
	$wpdb->update(
		'pedidos', //table
		array('id_produto' => $id_produto), //data
		array( 'id_cliente' => $id_cliente ), //where
		array('%s'), //data format
		array('%s') //where format
	);	
}
//delete
else if(isset($_POST['delete'])){	
	$wpdb->query($wpdb->prepare("DELETE FROM pedidos WHERE id = %s",$id));
}
else{//selecting value to update	
	$pedidos = $wpdb->get_results($wpdb->prepare("SELECT id_produto,id_cliente from pedidos where id=%s",$id));
	foreach ($pedidos as $s ){
		$name=$s->name;
	}
}
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/loja-pedidos/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>Pedidos</h2>

<?php if($_POST['delete']){?>
<div class="updated"><p>pedidos deleted</p></div>
<a href="<?php echo admin_url('admin.php?page=loja_pedidos_list')?>">&laquo; Back to pedidos list</a>

<?php } else if($_POST['update']) {?>
<div class="updated"><p>pedidos updated</p></div>
<a href="<?php echo admin_url('admin.php?page=loja_pedidos_list')?>">&laquo; Back to pedidos list</a>

<?php } else {?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
<table class='wp-list-table widefat fixed'>
<tr><th>Name</th><td><input type="text" name="name" value="<?php echo $name;?>"/></td></tr>
</table>
<input type='submit' name="update" value='Save' class='button'> &nbsp;&nbsp;
<input type='submit' name="delete" value='Delete' class='button' onclick="return confirm('&iquest;Est&aacute;s seguro de borrar este elemento?')">
</form>
<?php }?>

</div>
<?php
}
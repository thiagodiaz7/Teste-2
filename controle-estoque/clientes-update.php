<?php
function loja_clientes_update () {
global $wpdb;
$id = $_GET["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$telefone=$_POST["telefone"];
//update
if(isset($_POST['update'])){	
	$wpdb->update(
		'clientes', //table
		array('name' => $name), //data
		array( 'ID' => $id ), //where
		array( 'E-mail' => $email ), //where
		array( 'Telefone' => $telefone ), //where
		array('%s'), //data format
		array('%s') //where format
	);	
}
//delete
else if(isset($_POST['delete'])){	
	$wpdb->query($wpdb->prepare("DELETE FROM clientes WHERE id = %s",$id));
}
else{//selecting value to update	
	$clientes = $wpdb->get_results($wpdb->prepare("SELECT id,name,email,telefone from clientes where id=%s",$id));
	foreach ($clientes as $s ){
		$name=$s->name;
	}
}
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/loja-clientes/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>clientes</h2>

<?php if($_POST['delete']){?>
<div class="updated"><p>School deleted</p></div>
<a href="<?php echo admin_url('admin.php?page=loja_clientes_list')?>">&laquo; Back to clientes list</a>

<?php } else if($_POST['update']) {?>
<div class="updated"><p>School updated</p></div>
<a href="<?php echo admin_url('admin.php?page=loja_clientes_list')?>">&laquo; Back to clientes list</a>

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
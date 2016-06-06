<?php
function loja_produtos_update () {
global $wpdb;
$id = $_GET["id"];
$name=$_POST["name"];
$name=$_POST["descricao"];
$name=$_POST["preco"];
//update
if(isset($_POST['update'])){	
	$wpdb->update(
		'produtos', //table
		array('name' => $name), //data
		array( 'ID' => $id ), //where
		array( 'Descrição' => $descricao ), //where
		array( 'Preço' => $preco ), //where
		array('%s'), //data format
		array('%s') //where format
	);	
}
//delete
else if(isset($_POST['delete'])){	
	$wpdb->query($wpdb->prepare("DELETE FROM produtos WHERE id = %s",$id));
}
else{//selecting value to update	
	$produtos = $wpdb->get_results($wpdb->prepare("SELECT id,name,descricao,preco from produtos where id=%s",$id));
	foreach ($produtos as $s ){
		$name=$s->name;
	}
}
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/loja-produtos/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>produtos</h2>

<?php if($_POST['delete']){?>
<div class="updated"><p>produtos deleted</p></div>
<a href="<?php echo admin_url('admin.php?page=loja_produtos_list')?>">&laquo; Back to produtos list</a>

<?php } else if($_POST['update']) {?>
<div class="updated"><p>produtos updated</p></div>
<a href="<?php echo admin_url('admin.php?page=loja_produtos_list')?>">&laquo; Back to produtos list</a>

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
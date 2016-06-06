<?php
function loja_produtos_create () {
$id = $_POST["id"];
$name = $_POST["name"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
//insert
if(isset($_POST['insert'])){
	global $wpdb;
	$wpdb->insert(
		'produtos', //table
		array('id' => $id,'name' => $name,'descricao' => $descricao,'preco' => $preco), //data
		array('%s','%s') //data format			
	);
	$message.="produtos inserted";
}
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/loja-produtos/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>Adicionar Novo Produto</h2>
<?php if (isset($message)): ?><div class="updated"><p><?php echo $message;?></p></div><?php endif;?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
<table class='wp-list-table widefat fixed'>
<tr><th>ID</th><td><input type="text" name="id" value="<?php echo $id;?>"/></td></tr>
<tr><th>Produtos</th><td><input type="text" name="name" value="<?php echo $name;?>"/></td></tr>
<tr><th>Descrição</th><td><input type="text" name="descricao" value="<?php echo $descricao;?>"/></td></tr>
<tr><th>Preço</th><td><input type="text" name="preco" value="<?php echo $preco;?>"/></td></tr>
</table>
<input type='submit' name="insert" value='Save' class='button'>
</form>
</div>
<?php
}
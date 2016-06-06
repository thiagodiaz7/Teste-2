<?php
function loja_produtos_list () {
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/loja-produtos/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>Produtos</h2>
<a href="<?php echo admin_url('admin.php?page=loja_produtos_create'); ?>">Adicionar</a>
<?php
global $wpdb;
$rows = $wpdb->get_results("SELECT id,name,descricao,preco from produtos");
echo "<table class='wp-list-table widefat fixed'>";
echo "<tr><th>ID</th><th>Name</th><th>Descrição</th><th>Preço</th><th>&nbsp;</th></tr>";
foreach ($rows as $row ){
	echo "<tr>";
	echo "<td>$row->id</td>";
	echo "<td>$row->name</td>";
	echo "<td>$row->descricao</td>";
	echo "<td>$row->preco</td>";
	echo "<td><a href='".admin_url('admin.php?page=loja_produtos_update&id='.$row->id)."'>Update</a></td>";
	echo "</tr>";}
echo "</table>";
?>
</div>
<?php
}
<?php
function loja_pedidos_list () {
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/loja-produtos/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>Pedidos</h2>
<a href="<?php echo admin_url('admin.php?page=loja_pedidos_create'); ?>">Adicionar</a>
<?php
global $wpdb;
$rows = $wpdb->get_results("SELECT id_produto,id_cliente from pedidos");
echo "<table class='wp-list-table widefat fixed'>";
echo "<tr><th>ID Produto</th><th>ID Cliente</th><th>&nbsp;</th></tr>";
foreach ($rows as $row ){
	echo "<tr>";
	echo "<td>$row->id_produto</td>";
	echo "<td>$row->id_cliente</td>";	
	echo "<td><a href='".admin_url('admin.php?page=loja_pedidos_update&id='.$row->id)."'>Update</a></td>";
	echo "</tr>";}
echo "</table>";
?>
</div>
<?php
}
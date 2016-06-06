<?php
function loja_clientes_list () {
?>
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/loja-clientes/style-admin.css" rel="stylesheet" />
<div class="wrap">
<h2>clientes</h2>
<a href="<?php echo admin_url('admin.php?page=loja_clientes_create'); ?>">Adicionar</a>
<?php
global $wpdb;
$rows = $wpdb->get_results("SELECT id,name,email,telefone from clientes");
echo "<table class='wp-list-table widefat fixed'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Telefone</th><th>&nbsp;</th></tr>";
foreach ($rows as $row ){
	echo "<tr>";
	echo "<td>$row->id</td>";
	echo "<td>$row->name</td>";	
	echo "<td>$row->email</td>";
	echo "<td>$row->telefone</td>";		
	echo "<td><a href='".admin_url('admin.php?page=loja_clientes_update&id='.$row->id)."'>Update</a></td>";
	echo "</tr>";}
echo "</table>";
?>
</div>
<?php
}
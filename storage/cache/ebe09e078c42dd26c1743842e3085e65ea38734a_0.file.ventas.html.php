<?php
/* Smarty version 3.1.33, created on 2019-03-19 05:18:25
  from 'C:\xampp\htdocs\riveras\public\views\ventas.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c906d9145d870_80945836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebe09e078c42dd26c1743842e3085e65ea38734a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveras\\public\\views\\ventas.html',
      1 => 1552969104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c906d9145d870_80945836 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<!-- METADATOS -->
<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['DIR']->value).('inc/head.html'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<style>
</style>
<body>
   <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['DIR']->value).('modules/ventas/agregar_cuenta.html'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
   <!-- CABECERA -->
   <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['DIR']->value).('modules/ventas/header-ventas.html'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

   <div class="row">
      <!-- SIDEBAR -->
      <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['DIR']->value).('modules/ventas/sidebar-ventas.html'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>   
      <!-- CONTENIDO PRINCIPAL -->
      <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['DIR']->value).('modules/ventas/main-ventas.html'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
   </div>

   <!-- PIÉ DE PÁGINA -->
   <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['DIR']->value).('inc/footer.html'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>

<!-- RECURSOS JAVASCRIPT -->
<?php echo '<script'; ?>
 src="public/js/ventas/events.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ventas/onload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ventas/print-functions.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['DIR']->value).('inc/source-js.html'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</html><?php }
}

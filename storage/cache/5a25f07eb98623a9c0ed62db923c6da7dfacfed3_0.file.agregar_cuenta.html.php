<?php
/* Smarty version 3.1.33, created on 2019-03-18 23:45:22
  from 'C:\xampp\htdocs\riveras\public\views\modules\ventas\agregar_cuenta.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c901f82610e36_48086627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a25f07eb98623a9c0ed62db923c6da7dfacfed3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveras\\public\\views\\modules\\ventas\\agregar_cuenta.html',
      1 => 1552949121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c901f82610e36_48086627 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="m_agregar_cuenta" class="modal">
  <div class="m-bg">
    <div class="m-content">
      <div class="m-header">
        <div class="row justify-content-between align-items-center">
          <p id="m_titulo_add_cuenta">Agregar Cuenta</p>
          <div class="btn-close">&Cross;</div>
        </div>
      </div>

      <div class="m-body">
          <form class="agr_cuenta" action="" method="post">
              <label for="comensal">Cliente*</label>
              <input type="text" name="comensal" value="">
              <label for="tel">Teléfono</label>
              <input type="tel" name="tel" value="">
            </form>
      </div>
    </div>
  </div>
</div><?php }
}

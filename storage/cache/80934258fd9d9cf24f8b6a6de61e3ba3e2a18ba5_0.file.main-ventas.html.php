<?php
/* Smarty version 3.1.33, created on 2019-03-04 04:46:41
  from 'C:\xampp\htdocs\riveras\public\views\modules\ventas\main-ventas.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7c9fa142d722_42676032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80934258fd9d9cf24f8b6a6de61e3ba3e2a18ba5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveras\\public\\views\\modules\\ventas\\main-ventas.html',
      1 => 1551671200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7c9fa142d722_42676032 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main>
  <div class="container">
      <section class="tabla-info col-xs-3">
          <table>
            <thead>
              <tr>
                <th>CUENTA</th>
                <th>TOTAL</th>
                <th>
                  <button class="btn primary col-xs-12" type="button" name="button"><i class="fas fa-plus"></i> Agregar</button>
                </th>
              </tr>
            </thead>
      
            <tbody>
              <tr>
                <td>JUAN</td>
                <td>0.00</td>
                <td>
                  <button class="btn alert" type="button" name=""><i class="far fa-eye"></i> Ver</button>
                  <button class="btn danger" type="button" name=""><i class="fas fa-times"></i></button>
                </td>
              </tr>
              <tr>
                <td>PEDRO</td>
                <td>0.00</td>
                <td>
                  <button class="btn alert" type="button" name=""><i class="far fa-eye"></i> Ver</button>
                  <button class="btn danger" type="button" name=""><i class="fas fa-times"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </section>
      
        <section class="fondo-mesas col-xs-9">
          <!-- DIVS DE MESAS -->
          <div class="mesa desocupada col-xs-2">
            <label for="mesa-1">Mesa 1</label>
            <button class="btn-rose col-xs-12" type="button" name="mesa-1">Ocupar</button>
          </div>
      
          <div class="mesa desocupada col-xs-2">
            <label for="mesa-2">Mesa 2</label>
            <button class="btn-rose col-xs-12" type="button" name="mesa-2">Ocupar</button>
          </div>
      
          <div class="mesa ocupada col-xs-2">
            <label for="mesa-3">Mesa 3</label>
            <button class="btn-rose  col-xs-12" type="button" name="mesa-3">Desocupar</button>
          </div>
      
          <div class="mesa ocupada col-xs-2">
            Mesa 4
            <button class="btn-rose  col-xs-12" type="button" name="mesa-3">Desocupar</button>
          </div>
      
          <div class="mesa desocupada col-xs-2">
            Mesa 5
            <button class="btn-rose col-xs-12" type="button" name="mesa-2">Ocupar</button>
          </div>
        </section>
  </div>

  
</main>
<?php }
}

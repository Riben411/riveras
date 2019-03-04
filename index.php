<?php

   include_once 'app/lib/vendor/autoload.php';

   $html = new Smarty(); // PERMITE TRABAJAR CON PLANTILLAS
   session_start(); // PERMITE TRABAJAR CON SESIONES
   $html->assign('DIR', 'public/views/'); // RUTA DE LOS ARCHIVOS DE TEMPLATES

   $view = isset($_GET['view']) ? $_GET['view'] : '';

   if ($view === '' || $view === 'index') {

      /** PÁGINA DE INICIO */
      $html->display('public/views/index.html');

   } else {

      /** PÁGINA SELECCIONADA */
      if (is_file('public/views/' . $view . '.html')) {
         $html->display('public/views/' . $view . '.html');

      } else {
         $html->display('public/views/error_404.html');
      }
   }

?>
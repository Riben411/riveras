<?php

/** MODELO DE CONEXION A LA BASE DE DATOS */

class Conexion
{
   private static $con;

   private static function conectar() {
      require_once 'Settings/Config.php';
      
      self::$con = new PDO('mysql:host=localhost;dbname='. DB_NAME .';charset=UTF8', DB_USER, DB_PASS,
      array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));

      return self::$con;
   }

   public static function query($sql, $data = array(), $select = false, $one = false) {
      $c = self::conectar();

      $stmt = $c->prepare($sql);
      $stmt->execute($data);

      if ($select) {

         if ($one) {
            return $stmt->fetch(PDO::FETCH_ASSOC);

         } else {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

         }
      } else {
         return 1;

      }

   }
}

?>
<?php
//clase controlador principal
//se encarga de pode rcargar las vistas y modelos

class Controlador
{

      //cargar modelo
      public function modelo($modelo)
      {
            //carga
            require_once "../app/modelos/" . $modelo . '.php';
            //instanciar el modelo
            return new $modelo();
      }

      //cargar vista
      public function vista($vista, $datos = [])
      {
            //chequear el archivo vista existe
            if (file_exists("../app/vistas/" . $vista . '.php')) {
                  require_once "../app/vistas/" . $vista . '.php';
            } else {
                  // si el archivo no existe
                  die("la vista no existe");
            }
      }
}

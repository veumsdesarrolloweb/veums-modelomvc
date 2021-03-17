<?php 

class Paginas extends Controlador{
        public function __construct(){

        }

        public function index(){

                $datos = [
                        'titulo' => "Veums desarrollo Web"
                ];

                $this->vista('Paginas/inicio', $datos);
        }

        public function servicios(){

                $this->vista('Paginas/servicios');
        }

        public function modelosweb(){

                $this->vista('Paginas/modelosWeb');
        }

        public function contacto(){

                $this->vista('Paginas/contacto');
        }
}
<?php
    include_once("model/empleado.php");
    include_once("conexion.php");
    Conexion::getConnection();

    class ControllerEmpleado{

        public function inicio(){
            $empleados = Empleado::list();
            require_once("view/empleado/inicio.php");            
        }

        public function crear(){
            if(  $_POST  ){
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                Empleado::save($nombre,$correo);
                header("Location: ./?controller=empleado&action=inicio");
            }
            require_once("view/empleado/crear.php");
        }

        public function editar(){

            if(  $_POST  ){
                $id = $_POST['id'];
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];

                Empleado::update($id,$nombre,$correo);
                header("Location: ./?controller=empleado&action=inicio");
            }

            $empleado = Empleado::search($_GET['id']);            
            require_once("view/empleado/editar.php");
        }

        public function eliminar(){
            Empleado::delete($_GET['id']);
            header("Location: ./?controller=empleado&action=inicio");
        }
    }
?>
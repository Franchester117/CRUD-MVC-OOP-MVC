<?php
    class Empleado{

        public $id;
        public $nombre;
        public $correo;

        public function __construct($id,$nombre,$correo) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->correo = $correo;
        }

        public static function list(){
            $listaEmpleado = [];
            $conn = Conexion::getConnection();
            $sql = $conn->query("SELECT * FROM empleados");

            foreach($sql->fetchAll() as $data){
                $listaEmpleado[] = new Empleado(
                    $data['id'],
                    $data['nombres'],
                    $data['correo']
                );
            }

            return $listaEmpleado;
        }

        public static function save($nombre,$correo){
            $conn = Conexion::getConnection();
            $sql = $conn->prepare("INSERT INTO empleados (nombres,correo) VALUES(?,?)");
            $sql->execute(array($nombre,$correo));
        }

        public static function search($id){
            $conn = Conexion::getConnection();
            $sql = $conn->prepare("SELECT * FROM empleados WHERE id = ?");
            $sql->execute(array($id));
            $data = $sql->fetch();

            return new Empleado(
                $data['id'],
                $data['nombres'],
                $data['correo']
            );
        }

        public static function update($id,$nombre,$correo){
            $conn = Conexion::getConnection();
            $sql = $conn->prepare("UPDATE empleados SET nombres = ?, correo = ? WHERE id = ?");
            $sql->execute(array($nombre,$correo,$id));
        }

        public static function delete($id){
            $conn = Conexion::getConnection();
            $sql = $conn->prepare("DELETE FROM empleados WHERE id = ?");
            $sql->execute(array($id));
        }
    }
?>
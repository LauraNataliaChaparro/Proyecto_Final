<!--Codigo PHP-->
<?php
    include_once('../config/config.php');
    include('../config/Database.php');
    
    class Functions{
        //Funcion que permite conectarnos a la base de datos//
        public $conexion;
        function __construct(){
            $db = new Database();
            $this->conexion = $db->connectToDatabase();
        }
        //Funcion que permite guardar//
        function save($params){
            $nombres = $params['nombres'];
            $apellidos = $params['apellidos'];
            $direccion = $params['direccion'];
            $celular = $params['celular'];
            $profesion = $params['profesion'];
            $email = $params['email'];

            $insert = "INSERT INTO usuarios VALUES (NULL, '$nombres', '$apellidos', '$direccion', '$celular', '$profesion', '$email')";
            return mysqli_query($this->conexion, $insert);
        }
        //Funciones que permiten observar los usuarios registrados//
        function getAll(){
            $sql = "SELECT * FROM usuarios ";
            return mysqli_query($this->conexion, $sql);
        }

        function getOne($id){
            $sql = "SELECT * FROM usuarios WHERE id = $id";
            return mysqli_query($this->conexion, $sql);
        }
        //Funcion que permite modificar los usuarios//
        function update($params){
            $nombres = $params['nombres'];
            $apellidos = $params['apellidos'];
            $direccion = $params['direccion'];
            $celular = $params['celular'];
            $profesion = $params['profesion'];
            $email = $params['email'];
            $id = $params['id'];

            $update = "UPDATE usuarios SET nombres='$nombres', apellidos='$apellidos', direccion='$direccion', celular='$celular', profesion='$profesion',email='$email' WHERE id = $id";
            return mysqli_query($this->conexion, $update);
        }
        //Funcion que permite eliminar un usuario//
        function delete($id){
            $delete = "DELETE FROM usuarios WHERE id = $id";
            return mysqli_query($this->conexion, $delete);
        }
    }
?>
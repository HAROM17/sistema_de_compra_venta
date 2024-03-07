<?php
    session_start();
    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                   $conectar = $this->dbh=new PDO("sqlsrv:Server=DESKTOP-SVUILV5\SQLEXPRESS;Database=CompraVenta","sa","passwordxd");
                   //$conectar = $this->dbh=new PDO("sqlsrv:server = tcp:harom01.database.windows.net,1433; Database = compraventa01","admin_super","xdaquivaelpasswordp");
                return $conectar;
            }catch (Exception $e){
                print "Error Conexion BD". $e->getMessage() ."<br/>";
                die();
            }
        }

        public static function ruta() {
            return "http://localhost:90/sistema_compra_venta/";
            //return "https://invnet.azurewebsites.net/";
        }
    }

?>

<?

$servername = "mysql_d";
$username = "daniel";
$password = "desarrollo";

// Create connection/
     $conn = new mysqli($servername, $username, $password);
// Check connection
     if ($conn->connect_error) {
        die("Conexion fallida a MYSQL" . $conn->connect_error);
                              }
         echo "Conexion exitosa a MYSQL produccion";

     $m = new MONGODB\DRIVER\Manager("mongodb://localhost:27017");
        echo "Conexion Exitosa a MONGODB";
?>



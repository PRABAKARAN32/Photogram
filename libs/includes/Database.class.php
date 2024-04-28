<?
class Database{


    private static $conn = null;

    public static function getconnection()
    {
        if(Database::$conn == null)
        {
        $servername = "mysql.selfmade.ninja";
        $username = "Photogram";
        $password = "PKlegend32";
        $dbname = "Photogram_login";

        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        //print("New connection Established");
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        else{
            Database::$conn = $conn;
            return Database::$conn;
        }
        }
        else{
            //print("Existing connection Established");
            return Database::$conn;
        }
    }
}


?>


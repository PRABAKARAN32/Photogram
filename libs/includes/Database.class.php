<?
class Database{


    private static $conn = null;

    public static function getconnection()
    {
        if(Database::$conn == null)
        {
        $servername = get_config("db_server");
        $username = get_config("db_user");
        $password = get_config("db_pass");
        $dbname = get_config("db_name");

        
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


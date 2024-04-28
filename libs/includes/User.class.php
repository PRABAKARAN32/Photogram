<?

class User{
    private $conn;
    private $username;
    private $id;

    public static function signup($user_name,$user_pass,$user_mobile,$user_email)
       {
            $conn = Database::getconnection();
            //$user_pass = md5($user_pass);  //Sequrity through obsurity
            $options = ['cost' => 9];
            $user_pass = password_hash($user_pass,PASSWORD_DEFAULT,$options);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
    
            $result = false;
            $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `blocked`, `active`, `mobile_no`)
                    VALUES ('$user_name', '$user_pass', '$user_email', '0', '1', '$user_mobile')";
            try{
            if ($conn->query($sql)) {
            //echo "New record created successfully";
            $result = true;
            } else {
                print("Failed");
            echo "Error: " . $sql . "<br>" . $conn->error;
            $result = false;
            }
        }
        catch(Exception $e)
        {
        }
            //$conn->close();
            return $result;
        }

    public static function login($user_email,$user_pass)
    {
        $conn = Database::getconnection();

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          
          //$sql = "SELECT id, username, mobile_no,email, password FROM auth";
          
          $query  = "SELECT * FROM `auth` WHERE `email` = '$user_email'" ;
          $result = $conn->query($query);
          
          
          if ($result->num_rows == 1) {
            //$result_data = false;
            // output data of each row
            // while($row = $result->fetch_assoc()) {
            //   //echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["mobile_no"]. "<br>" . "Password : " . $row["password"];
            //   if($user_email === $row["email"] and md5($user_pass) === $row["password"])
            //   {
            //     $result_data = true;
            //     break;

            //   }
            // }
            $row = $result->fetch_assoc();
            if(password_verify($user_pass,$row['password'])){
              return $row;
            }
          } else {
            return false;
          }
          //$conn->close();

          //return $result_data;


            
    }


    public function __construct($username)
    {
        $this->conn = Database::getconnection();
        $this->conn->query();
        $this->username = $username;
        $this->id = null;
    }


public function authentiate()
{
    
}


public function setBio()
{
    
}

public function getBio()
{
    
}

public function setAvater()
{
    
}

public function getAvater()
{
    
}

}


//$sql = "SELECT id, username, password, email, blocked, active, mobile_no FROM auth" ;

?>

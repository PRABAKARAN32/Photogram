<?

//use function PHPSTORM_META\type;

include_once 'includes/Database.class.php';
include_once 'includes/User.class.php';
include_once 'includes/Session.class.php';

global $__stie_config;
$__stie_config = file_get_contents($_SERVER['DOCUMENT_ROOT']."/../photogram_db/db.json");

session_start();

function get_config($key,$default = null){
    global $__stie_config;
    $array = json_decode($__stie_config, true);
    if(isset($array[$key])){
        return $array[$key];
    }
    else{
        return $default;
    }
}

function load_templates($name){
    // print(__DIR__."/../_templates/$name.php");
    // print(__FILE__);
    include __DIR__."/../_templates/$name.php";
}



// function validation($username,$pass){
//     print("validation");
//     print($username);
//     print($pass);

//     if($username == "prabakaran@gmail.com" && $pass == "PKlegend32"){
//         // print("true");
//         return true;
//     }
//     // print("false");
//     return false;
// }



// function login($user_email,$user_pass)
// {
//     $servername = "mysql.selfmade.ninja";
//     $username = "Photogram";
//     $password = "PKlegend32";
//     $dbname = "Photogram_login";

//     // Create connection
//     $conn = new mysqli($servername, $username, $password, $dbname);
//     // Check connection
//     if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//     }

//     $sql = "SELECT id, username, password, email, blocked, active, mobile_no FROM auth" ; // WHERE lastname='Doe'";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";\
//         $result_data = false;
//         if($user_email == $row["email"]and $user_pass ==$row["password"] ){
//            //echo "id: " . $row["id"] ."<br> ". "Name: " . $row["username"] . "<br> ". "Email: " . $row["email"] ."<br> ". "Mobile No:" .$row["mobile_no"] . "<br>" ;
//            $result_data = true;
//             ?>
          <!-- <main class="container" >
//           <div class="bg-body-tertiary p-5 rounded mt-3">
//             <h1>Login Sucess!!!</h1>
//             <p class="lead">Welcome  Back:<?//echo $username?>.</p>
//             <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View navbar docs »</a>
//           </div>
//           </main> -->
            
           <?

//         }
//         else {
//             echo "no  data found ";
//            $result = false;
//         }
//     }
//     }
//     $conn->close();
//     return $result_data;
// }
// ?>



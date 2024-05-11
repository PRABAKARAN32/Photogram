<!-- <pre> -->
<?

include 'libs/load.php';
//print_r($_SERVER);


// print_r("GET " ."<br>".$_GET."\n");
// print_r("post " ."<br>".$_POST);

//print_r($_POST);


// if(signup("","","",""))
// {

//     echo "Sucesses";

// }

// else{
//    echo "failed";
// }

// login("" ,"");

// Database::getconnection();
// Database::getconnection();
// Database::getconnection();
// Database::getconnection();

$email = "prabakaran@gmail.com";
$pass = isset($_GET['pass']) ? $_GET['pass'] : "Enter pass";//"PKlegend32";
$result = null;

if(isset($_GET['logout']))
{
    Session::destroy();
    die("Session Destoried" . "<br><a href =test.php>Login</a>");
}

//print(Session::get('is_loggedin'));
if(Session::get('is_loggedin'))
{
    $username = Session::get('session_username');
    $userobj = new User($username);
    
    print("Welcome Back  " . $userobj->getfirstname());
    // $result = $userdata;
}
else{
    
            print("No Session Found , Try to login again...!!");
            $result = User::login($email,$pass);
            $userobj = new User($result);

        if($result){
            print("Login Sucess\n<br>".$userobj->getlastname());
            Session::set('is_loggedin',true);
            Session::set('session_username',$result);
        }
        else{
            print("Login Failed");
        }
}

echo <<<EOL
<br> <br> <a href = "test.php?logout">Logout</a>
EOL;



?>
<!-- </pre> -->
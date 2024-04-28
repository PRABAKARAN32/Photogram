<?


include 'libs/load.php';
// $h = session_start();
// print($h);
// // print("GET\n"."<br>");
// // print_r($_GET);
// // print("PODT\n"."<br>");
// // print_r($_POST);
// // print("SERVER\n"."<br>");
// // print_r($_SERVER);
// // print("COOKIES\n"."<br>");
// // print_r($_COOKIE);
// // print("FILES\n"."<br>");
// // print_r($_FILES);

// setcookie("Time",time());


// if(isset($_GET['clear']))
// {
//     print("Clearing...");
//     session_unset();
// }

// if(isset($_SESSION["a"]))
// {
//     print("Existing Session is started");
//     print($_SESSION["a"]);
//     // $_SESSION = ["a" => 200];
// }
// // elseif($_SESSION["a"] == 200) 
// // {
// //     session_destroy();
// //     print("Session Destroied");
    
// // }
// else{
//     print("New Session Inisalized");
//     $_SESSION = ["a" => time()];
// }



// if(isset($_GET['destory']))
// {
//     print("Destory....");
//     session_destroy();
// }

Session::start();
if(isset($_GET['clear']))
{
    print("Clearing....\n");
    
    Session::unset();
}

if(isset($_GET['des']))
{
   Session::destroy();
    
    print("Destorying....");
    
}


?>
<?

function load_templates($name){
    // print(__DIR__."/../_templates/$name.php");
    // print(__FILE__);
    include __DIR__."/../_templates/$name.php";
}



function validation($username,$pass){
    print("validation");
    print($username);
    print($pass);

    if($username == "prabakaran@gmail.com" && $pass == "PKlegend32"){
        // print("true");
        return true;
    }
    // print("false");
    return false;
}
?>

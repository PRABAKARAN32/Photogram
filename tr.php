<?

include 'libs/load.php';

// print_r($_SESSION);


$time = microtime(true);

$randum = rand(2,10);
print("$randum");
$user_pass = "Prabakaran";
$option = ['cost' => 15];

$pass = password_hash($user_pass,PASSWORD_DEFAULT,$option);

echo $pass."\t".($time - time());

?>
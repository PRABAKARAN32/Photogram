<?

$password = "prabakaran";

$options = ['cost' => 9];
$en_pass = password_hash($password,PASSWORD_DEFAULT,$options);

print($en_pass);
print("\n\n");

$ver_pass = password_verify($password,$en_pass);
print("\n\n");
print($ver_pass);
print("\n\n");
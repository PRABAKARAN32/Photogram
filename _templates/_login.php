

<?

$count = 0;

$useremail = $_POST['email'];
$userpass = $_POST['pass'];
$result = User::login($useremail,$userpass);


if($result){


    ?>



<div class="bg-body-tertiary p-5 rounded mt-3">
    <h1>Login Sucess</h1>
    <p class="lead">Welcme Back <?print(basename($_POST['email'],'@gmail.com'));?>.</p>
    <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View navbar docs »</a>
  </div>


    <?
}

else{
  //  print("Failed");
    ?>

<main class="form-signin w-100 m-auto">
  <!-- <form method="post" action="../../photogram/test.php"> -->
  <form method="post" action="login.php">
    <img class="mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
  </form>
</main>
<?
}
?>
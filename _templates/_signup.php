<?

$signup = false;


if(isset($_POST['username']) and isset($_POST['pass']) and isset($_POST['email']) and isset($_POST['userno']))
{

  // echo $_POST['username'] . $_POST['pass'] . $_POST['email'] . $_POST['userno'] ;
  
$username = $_POST['username'];
$userpass = $_POST['pass'];
$useremail = $_POST['email'];
$usermobile = $_POST['userno'];
$result = User::signup($username,$userpass,$usermobile,$useremail);
$signup = true;

}

if($signup)
{
     if($result){
            ?>
            <main class="container" >
          <div class="bg-body-tertiary p-5 rounded mt-3">
            <h1>SignUp Sucess</h1>
            <p class="lead">Welcome <?echo $username?>. Now you can login <a href="login.php">hear</a>.</p>
            <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View navbar docs »</a>
          </div>
          </main>  
            <?
      }
        else{
             ?>
            <main class="container" >
          <div class="bg-body-tertiary p-5 rounded mt-3">
            <h1>SignUp Falied</h1>
            <p class="lead">Something Went Wrong.</p>
            <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View navbar docs »</a>
          </div>
          </main>  
    
        <?
      }
      ?>
  
  <?
}
else
{?>


<main class="form-signup w-100 m-auto">
  <!-- <form method="post" action="../../photogram/test.php"> -->
  <form method="post" action="signup.php">
    <img class="mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name" name="username">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="floatingInput" placeholder="90xxxxxx09" name="userno">
      <label for="floatingInput">Mobile Number</label>
    </div>
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
    <p class="mt-5 mb-3 text-body-secondary">© 2018–2024</p>
  </form>
</main>
<?
}
?>

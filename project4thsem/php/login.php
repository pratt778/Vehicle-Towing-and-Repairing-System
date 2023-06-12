<?php 
if (isset($_COOKIE['username'])) {
  session_start();
  $_SESSION['username'] =  $_COOKIE['username'];
  $_SESSION['login_status'] = true;
  header('location:dashboard.php');
}

$username = '';
if (isset($_POST['btnLogin'])) {
  $err  = [];
  if (isset($_POST['username']) && !empty($_POST['username']) && trim($_POST['username'])) {
    if (!preg_match("/^[a-zA-Z0-9_]{8,20}$/", $_POST['username'])) {
      $err['username'] =  'Enter valid username';  
    } else {
      $username =  $_POST['username'];
    }
  } else {
    $err['username'] =  'Enter username';
  }

  if (isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])) {
    $password = $_POST['password'];
  } else {
    $err['password'] =  'Enter password';
  }

  if(count($err) == 0){
    if ($username == 'hemant123' && $password == 'vtrs123') {
      
      //check remember me section
      if (isset($_POST['remember'])) {
        setcookie('username',$username,time()+7*24*60*60);
      }
      //start session
      session_start();
      //store username into session
      $_SESSION['username'] =  $username;
      $_SESSION['login_status'] = true;
      header('location:dashboard.php');
    } else {
      echo 'Login Failed';
    }
  }
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Form</title>
  <style type="text/css">
    body{
      display: flex;
      flex-direction: column;
      /* text-align: center; */
      justify-content: center;
      align-items: center;
      background: url("image/blurryimage.jpg") no-repeat center center;
      color: white;
    }
    body span{
      margin-top: 100px;
      margin-bottom: 29px;
      color: orange;
      font-size: 40px;
      font-weight: bold;
    }
    input[type='text'], input[type='password']{
      width: 250px;
      height: 35px;
      font-size: 20px;
      padding-left: 0px;
      border: 2px solid orange;
      outline: none;
    }
    label{
      font-size: 25px;
    }
    .control{
      padding-top: 20px;
      padding-left: 20px;
      font-size: 25px;
    
    }
    .control label {
      display: inline-block;
      width: 100px;
    }
    .control input[type="submit"]{

      width: 100px;
      height: 40px;
      font-size: 25px;
      font-weight: bold;
      background-color: orange;
      color: white;
      border: none;
      outline: none;
      /* padding-left: 30px; */
    }
    .control input[type="checkbox"]{
      width: 20px;
      height: 20px;
    }
    .check{
      /* width: 35px; */
      font-size: 18px;
    }
    .control input[type="submit"]:hover{
      color: orange;
      background-color: white;
    }
    #login{
      padding-left: 120px;
    }
  </style>
</head>
<body>
<span>Login Form</span>
<?php if (isset($_GET['msg']) && $_GET['msg'] == 1) {
  echo 'Please login to access your dashboard.';
} ?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <div class="control">
    <label for="username">Username</label>
    <input type="text" name="username" value="<?php echo $username; ?>" />
    <?php echo (isset($err['username'])?$err['username']:''); ?>
  </div>
  <div class="control">
    <label for="password">Password</label>
    <input type="password" name="password" />
    <?php echo (isset($err['password'])?$err['password']:''); ?>
  </div>
  <div class="control">
    <input type="checkbox" name="remember" value="remember" class="check">Remember me for 7 days
  </div>
  <div class="control" id="login">
    <input type="submit" name="btnLogin" value="Login" />
  </div>
</form>
</body>
</html>
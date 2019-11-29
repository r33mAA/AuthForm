<?php
session_start();


$username = "";
$email    = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'n56286_dbuser', 'PxJ0xo@MHuKrGM9j', 'n56286_db');


if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($username)) {
  echo '<script language="javascript">';
  echo 'alert("Username is required")';
  echo '</script>';
 }
  if (empty($email)) {
    echo '<script language="javascript">';
    echo 'alert("E-mail is required")';
    echo '</script>';
  }
  if (empty($password_1)) {
  echo '<script language="javascript">';
  echo 'alert("Password is required")';
  echo '</script>';
  }
  if ($password_1 != $password_2) {
  echo '<script language="javascript">';
  echo 'alert("The two passwords do not match")';
  echo '</script>';
  }

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      echo '<script language="javascript">';
      echo 'alert("Username already exists")';
      echo '</script>';
    }

    if ($user['email'] === $email) {
      echo '<script language="javascript">';
      echo 'alert("email already exists")';
      echo '</script>';
    }
  }

 
  if (count($errors) == 0) {
    $password = md5($password_1);

    $query = "INSERT INTO users (username, email, password) 
          VALUES('$username', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }
}

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    echo '<script language="javascript">';
  echo 'alert("Username is required")';
  echo '</script>';
  }
  if (empty($password)) {
     echo '<script language="javascript">';
  echo 'alert("Password is required")';
  echo '</script>';
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>
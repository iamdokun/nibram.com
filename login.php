<?php 
session_start();
include_once 'core/admin.php';
$admin = new Admin;


if(isset($_POST['admin_login'])){
    $admin->login($_POST['username'],$_POST['password']);
} //else{
//     $_SESSION['error'] = "Your details pls";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="bootstrap/animate.min.css">

    <title>Nibram Cleaning Services</title>

</head>
<style>
    body {
        background: linear-gradient(90deg, rgba(4,122,195, 1), rgba(233,233,233, 1) 100%);
    }
.adminLogin {
    width: 310px;
}
.wrap {
    padding-top: 7rem;
}
.btn {
    background: linear-gradient(#047AC3, #e9e9e9);
}
</style>

<body>
<div class="container wrap">
    <div class="adminLogin m-auto px-3">
        <h3 class="text-center my-4">Admin Login</h3>
        <?php if(isset($_SESSION['error'])){
             echo'<div class="alert alert-danger" role="alert">';
             echo $_SESSION['error'];
           echo '</div>';
           unset($_SESSION['error']);

        }?>
        <form  method="post" action="">
            <div class="form-group">
                <label for="formGroupExampleInput">User Name</label>
                <input type="text" name="username" class="form-control" id="formGroupExampleInput" placeholder="" required>
                <?php if(isset($_SESSION['username'])){
             echo'<div class="alert alert-danger" role="alert">';
             echo $_SESSION['username'];
           echo '</div>';
           unset($_SESSION['username']);

        }?>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Password</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="" required name="password">
                <?php if(isset($_SESSION['password'])){
             echo'<div class="alert alert-danger" role="alert">';
             echo $_SESSION['password'];
           echo '</div>';
           unset($_SESSION['password']);

        }?>
            </div>
            <button type="submit"name="admin_login" class="btn px-3">Login</button>
        </form>
    </div>
</div>
</body>

</html>
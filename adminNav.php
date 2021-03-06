<?php session_start(); ?>
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
    .admin-nav {
        /* border: 1px solid red; */
        text-align: center;
        margin-top: 7rem;
    }
    .btn {
        padding: 1.8rem 3.5rem;
        background: linear-gradient(#047AC3, #e9e9e9);
        font-size: 1.5rem;
        border-radius: 10px;
        transition: 0.5s ease;
    }
    .btn:hover {
        transform: scale(.95);
    }
</style>
<body>
    <div class="container my-5">
        <div class="admin-nav">
            <h2 class="pb-5">Hi <?php echo $_SESSION['admin']->admin_user_name; ?></h2>
            <a href="clientData.php"><button class="btn mr-3">CLIENT DATA</button></a>
            <a href="quotation.php"><button class="btn">QUOTATION REQUEST</button></a>
            
        </div>
    </div>
</body>
</html>

<?php

ini_set('display_errors', 1);

require_once("functions.php");
$pdo = pdo_connect_mysql();

// echo 'test';
// die();




if(isset($_POST['register'])) {

//filter data name and password
$name = filter_input(INPUT_POST, 'name' , FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//$password = filter_input(INPUT_POST , 'use')
//hash_password
$password = password_hash($_POST["password"] ,  PASSWORD_DEFAULT);
$email = filter_input(INPUT_POST , 'email' , FILTER_VALIDATE_EMAIL);

//insert into users table
$sql = "INSERT INTO clients(name ,email , password)
        VALUES(:name, :email , :password)";
 $stmt = $pdo->prepare($sql);
 
 
 //bind parameter to query
 $params = array(
   ":name" => $name ,
   ":email" => $email,
   ":password" => $password

 );


 $saved = $stmt->execute($params);


 if($saved)
 { header("Location : login.php");
 }

}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<!-- cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font-awesome -->

    <link rel="stylesheet" href="bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <p>Log in <a href="login.php">Login </a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="name">Nama </label>
                <input class="form-control" type="text" name="name" placeholder="Name" />
            </div>


            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder=" Email" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="register" value="" />

        </form>
            
        </div>

       

    </div>
</div>

</body>
</html>
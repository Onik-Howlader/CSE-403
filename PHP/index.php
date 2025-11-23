<?php
    $conn=mysqli_connect("localhost", "root", "", "lab_exam");
    if(isset($_POST['register']))
    {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $hash=password_hash($pass, PASSWORD_DEFAULT);

        $sql= "INSERT INTO st_data(username,email,password)VALUES('$name', '$email', '$hash')";

        $data=mysqli_query($conn, $sql);
        
        if($data){
            echo "<script>
            alert('data successfully updated')
            </script>";
        }
        else{
            echo "<script>
            alert('data unsuccessful updated')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoG in FoRm</title>
    <style>
        h2{
            display: flex;
            justify-content: center;
            background-color: #778ae0ff;
            width: 250px;
            margin-left: 340px;
            border-radius: 8px;
        }
        .form{
            display: flex;
            justify-content: center;         
        }
        form{
            padding: 50px;
            border-radius: 8px;
            background-color: gray;
            bo
        }
        input{
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
        }
        label{
            font-size: 1.5rem;
        }
        input::placeholder{
            font-size: 1rem;
            padding: 5px 12px;
        }
        .btn-primary{
            margin-top: 10px;
            font-size: 1rem;
            padding: 8px 20px;
            background-color: blue;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="form">
        <form action="#" method="POST">
            <div>
                <label for="name">Username:</label><br>
                <input type="text" name="username" id="name" placeholder="Username">
            </div>
            <div>
                <label for="mail">Email:</label><br>
                <input type="email" name="email" id="mail" placeholder="UserEmail">
            </div>
            <div>
                <label for="passs">Password:</label><br>
                <input type="password" name="password" id="passs" placeholder="Password">
            </div>
            <div>
                <input type="submit" value="register" name="register" class="btn-primary">
            </div>
        </form>
    </div>
</body>

</html>
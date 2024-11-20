<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Container */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Card */
        .card {
            width: 300px; /* Perbesar ukuran card */
            height: 400px; /* Perbesar tinggi card */
            border-radius: 20px;
            background: #f5f5f5;
            position: relative;
            padding: 2rem;
            border: 2px solid #c3c6ce;
            transition: 0.5s ease-out;
            overflow: visible;
        }

        /* Card details */
        .card-details {
            color: black;
            height: 100%;
            gap: .5em;
            display: grid;
            place-content: center;
        }

        /* Button */
        .card-button {
            transform: translate(-50%, 125%);
            width: 60%;
            border-radius: 1rem;
            border: none;
            background-color: #008bf8;
            color: #fff;
            font-size: 1rem;
            padding: .5rem 1rem;
            position: absolute;
            left: 50%;
            bottom: 0;
            opacity: 0;
            transition: 0.3s ease-out;
        }

        /* Text */
        .text-body {
            color: rgb(134, 134, 134);
        }

        .text-title {
            font-size: 1.5em;
            font-weight: bold;
        }

        /* Hover effect */
        .card:hover {
            border-color: #008bf8;
            box-shadow: 0 4px 18px 0 rgba(0, 0, 0, 0.25);
        }

        .card:hover .card-button {
            transform: translate(-50%, 50%);
            opacity: 1;
        }

        /* Body background */
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
<div class="container m-auto">
    <form action="" method="post">
        <div class="card m-auto">
            <div class="card-details">
                <p class="text-title m-auto">Masukkan nama</p>
                <input type="text" name="a" class="form-control" required>
                <p class="text-title m-auto">Masukkan password</p>
                <input type="password" name="b" class="form-control" required>
                <button class="card-button" name="ok">Login</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
<?php
if(isset($_POST['ok'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $_SESSION['a'] = $a;
    $_SESSION['b'] = $b;
    $_SESSION['ok'] = true;
    
    if($a == "farhan" && $b == "123"){
        header("location:admin.php");
        exit();
    } elseif ($a == "asep" && $b == "1234") {
        header("location:user.php");
    } elseif ($a == "loop" && $b == "loop"){
        header("location:loop.php");
    }else {
        echo "<div class='alert alert-danger' style='margin: 20px;'>Username atau password salah!</div>";
    }
}
?>
<?php
session_start();
if (!isset($_SESSION['ok'])) {
    header("location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stlye.css">
</head>
<body>
    <script src="main.js"></script>
    <form method="post" action="">
    <div class="container m-auto">
        <div class="card">
            <div class="card-details">
                <div class="text-title">Masukkan Nilai</div>
                <div class="text-body">
                <input type="number" id="nilai" min="1" max="100" class="form-control" >
                <button type="button" name="ok" class="card-button" onclick="onGrade()">Okay</button>
                </div>
                <a class="text-center my-2" href="dsession.php"><button type="button" class="btn btn-outline-danger">Logout</button></a>
            </div>
        </div>
    </div>
</form>
</body>
</html>
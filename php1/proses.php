<?php
session_start();
if (!isset($_SESSION['ok'])) {
    header("location: index.php");
    exit();
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Card</title>
    <link rel="stylesheet" href="stlye.css">
</head>
<body>
<form method="post" action="">
    <div class="container">
        <div class="card">
            <div class="card-details">
                <div class="text-title">Hasil loop</div>
                <div class="text-body">
                <h3><?php $a=$_POST['a'];
                for ($i = 0;$i < 3;$i++) {
                echo "namamu adalah <br>";
                echo $a[$i]."<br>";
                }?></h3>
                </div>
                </div>
            <button class="card-button" name="kembali">Kembali</button>
        </div>
    </div>
</form>
</body>
</html>
<?php
if(isset($_POST['kembali']))
header("location:loop.php");
?>

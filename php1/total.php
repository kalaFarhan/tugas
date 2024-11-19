<?php
session_start();
if (!isset($_SESSION['ok'])) {
    header("location: index.php");
    exit();
}
$soto = $_POST['soto'];
$bakso = $_POST['bakso'];
$rendang = $_POST['rendang'];
$sotoT = $soto*90000;
$baksoT = $bakso*100000;
$rendangT = $rendang*120000;

$hasil = $sotoT+$baksoT+$rendangT;
$checkbox = $_POST['cek'];
if (is_null($checkbox)) {
  echo "<script>alert('Silahkan cek notip bjir'); window.location.href='cart.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="col-md-4 mx-auto">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                soto
                <span><?php echo $sotoT;?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                bakso
                <span><?php echo $baksoT; ?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                rendang
                <span><?php echo $rendangT; ?></span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                </div>
                <span><strong><?php echo $hasil; ?></strong></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>

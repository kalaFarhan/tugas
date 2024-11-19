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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
              .checked {
          color: orange;
        }
    </style>
</head>
<body>
<div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <img src="https://assets.unileversolutions.com/recipes-v2/242798.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h3 class="card-title">Soto</h3>
            <h5 class="card-title">Rp90.000</h5>
              <p class="card-text">Keluarkan muwani anda untuk membeli soto khas ngawi</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="cart.php" class="btn btn-primary">Beli</a>
                </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="https://img.kurio.network/rE9S29CrLtZ_dW5BiVsp7RufHZw=/1200x1200/filters:quality(80)/https://kurio-img.kurioapps.com/21/11/15/2cbee642-ecd0-4f1f-9d0b-23acb574fe59.jpe" class="card-img-top" alt="...">
            <div class="card-body">
            <h3 class="card-title">Bakso</h3>
            <h5 class="card-title">Rp100.000</h5>
              <p class="card-text">Bakso khas kota Malang nguwawor mawurah lohyaaa!!!</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="cart.php" class="btn btn-primary">Beli</a>
                </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="https://cdn.yummy.co.id/content-images/images/20230329/9IZ0mYzMAQi1EgVsb6cEbqyDCPzvNiyQ-31363830303534363638d41d8cd98f00b204e9800998ecf8427e.jpg?x-oss-process=image/resize,w_388,h_388,m_fixed,x-oss-process=image/format,webp" class="card-img-top" alt="...">
            <div class="card-body">
            <h3 class="card-title">Rendang</h3>
            <h5 class="card-title">Rp120.000</h5>
              <p class="card-text">Rendang khas padang dengan daging yang luwembut mbut mbut mbutt!!</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="cart.php" class="btn btn-primary">Beli</a>
                </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </div>
            </div>
          </div>
        </div>
</body>
</html>
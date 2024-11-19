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
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="my-5">
        <h2 class="text-center">Welkom!!</h2>
    </div>
    <form action="total.php" method="post">
        <section class="h-100">
            <div class="container h-100 py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-10">

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="fw-normal mb-0">Makan Dulu Lee!!</h3>
                        </div>

                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="https://assets.unileversolutions.com/recipes-v2/242798.jpg" class="img-fluid rounded-3" alt="Soto">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2">Soto</p>
                                        <p><span class="text-muted">Keluarkan muwani anda untuk membeli soto khas ngawi</span></p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        

                                        <input id="form1" min="0" name="soto" value="0" type="number" class="form-control form-control-sm">

                                        
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0">Rp90.000</h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <input type="checkbox" name="cek">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="https://img.kurio.network/rE9S29CrLtZ_dW5BiVsp7RufHZw=/1200x1200/filters:quality(80)/https://kurio-img.kurioapps.com/21/11/15/2cbee642-ecd0-4f1f-9d0b-23acb574fe59.jpe" class="img-fluid rounded-3" alt="Rawon">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2">Bakso</p>
                                        <p><span class="text-muted">Bakso khas kota Malang mawurah lohyaaa!!!</span></p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        

                                        <input id="form1" min="0" name="bakso" value="0" type="number" class="form-control form-control-sm">

                                        
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0">Rp100.000</h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <input type="checkbox" name="cek">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="https://cdn.yummy.co.id/content-images/images/20230329/9IZ0mYzMAQi1EgVsb6cEbqyDCPzvNiyQ-31363830303534363638d41d8cd98f00b204e9800998ecf8427e.jpg?x-oss-process=image/resize,w_388,h_388,m_fixed,x-oss-process=image/format,webp" class="img-fluid rounded-3" alt="Pecel">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2">Rendang</p>
                                          <p><span class="text-muted">Rendang khas padang dengan daging yang luwembut mbut mbut mbutt!!</span></p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        

                                        <input id="form1" min="0" name="rendang" value="0" type="number" class="form-control form-control-sm">

                                        
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0">Rp120.000</h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <input type="checkbox" name="cek">
                                    </div>
                                </div>
                            </div>
                        </div>

 
                        <div class="card">
                            <div class="card-body text-center">
                                <button type="submit" class="btn btn-primary btn-block btn-lg" nama="lanjut">Beli</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </form>
    <a class="text-center" ><button type="button" class="btn btn-outline-danger my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Logout
    </button></a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Logout Akun</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Jika anda keluar maka progres akan hilang
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <a href="dsession.php"><button type="button" class="btn btn-primary">Ya</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
if (isset($_POST['lanjut']))
header("location:total.php");


?>
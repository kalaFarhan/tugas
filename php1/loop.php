<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Form in Card</title>
    <link rel="stylesheet" href="stlye.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <form method="post" action="proses.php">
        <div class="container">
            <div class="card">
                <div class="card-details">
                    <div class="text-title">Hasil Loop</div>
                    <div class="text-body">
                        <?php
                        for ($i = 0; $i < 3; $i++) {
                            echo "<center><label>Masukkan Nama</label></center>";
                            echo "<input type='text' name='a[]' placeholder='Nama'><br>";
                        }
                        ?>
                    </div>
                </div>
                <button type="submit" class="card-button" name="gas">Okay</button>
                <a class="text-center my-2" href="dsession.php"><button type="button" class="btn btn-outline-danger">Logout</button></a>
            </div>
        </form>
    </div>
</body>
</html>

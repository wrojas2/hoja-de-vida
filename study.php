<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoja de Vida | Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/650c9965ac.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'partials/navbar.php'; ?>
    <div class="container mb-3">
        <div class="card text-center">
            <div class="card-body">
                <div class="card-header shadow rounded bg-dark text-white mt-1 mb-1">
                    <h5 class="card-title"><i class="fa-solid fa-graduation-cap"></i>ESTUDIOS</h5>
                </div>
                <div class="row">
                    <div class="col">
                        <?php include 'components/study/card-primaria.php'; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?php include 'components/study/card-secundaria.php'; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?php include 'components/study/card-tecnologico.php'; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?php include 'components/study/card-profesional.php'; ?>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted rounded">
                <i class="fa-sharp fa-regular fa-registered fa-sm" style="color: #0a3da4;"></i> Todos los Derechos Reservados
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
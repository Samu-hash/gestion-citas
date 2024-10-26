<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div style="background-color: #74749E; width: 100%; height: 90px; ">
  <!-- div con color --> 
</div>
    <main class="container">
    <div class="row">
        <div class="col" style="margin-top: 20px;">
            <h1>Formulario De Soporte Tecnico</h1>
        </div>
    </div>
    <div class="row py-3">
        <div class="col">
            <form class="row g-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ?>" method="POST" autocomplete="off">
                <div class="colmd-4">
                    <label for="solicitante" class="form-label">Nombre Completo</label>
                    <input type="text" name="solicitante" id="solicitante" class="form-control" required autofocus>
                </div>
                <div class="colmd-4">
                    <label for="servicio" class="form-label">Servicio Tecnico</label>
                    <input type="text" name="servicio" id="servicio" class="form-control" required autofocus>
                </div>
                <div class="colmd-4">
                    <label for="profesional" class="form-label">Profesional Requerido</label>
                    <input type="text" name="profesional" id="profesional" class="form-control" required autofocus>
                </div>
                <div class="colmd-4">
                    <label for="telefono" class="form-label" method="POST">Telefono</label>
                    <input type="number" name="telefono" id="telefono" class="form-control" pattern="[0-9]{6,10}" maxlength="10">
                </div>
                <div class="colmd-4">
                    <label for="Correo" class="form-label">Correo</label>
                    <input type="text" name="Correo" id="Correo" class="form-control" required autofocus>
                </div>
                <div class="col-md-12">
                <div style=" display:flex; width: 90%; margin: auto; justify-content: space-around; margin-bottom: 20px; ">
                    <a href="../index.php"> <button  type="button" class="btn btn-secondary btn-lg" style="background-color: #74749E;" > Atras </button> </a> 
                    <a> <button type="button" name="t" class="btn btn-secondary btn-lg" style="background-color: #74749E; height: 50px;" >Siguiente</button> </a> 
                </div>
                <?php 
                    include("validar.php");
                ?>
                </div>
            </form>
   
        </div>
    </div>
    </main>
    
                    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
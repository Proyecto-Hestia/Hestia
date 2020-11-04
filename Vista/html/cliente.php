<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HESTIA</title>
    <link rel="icon" href="Vista/img/jarra.png" type="image/x-icon">
    <!-- css -->
    <link href="Vista/css/styleCliente.css" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
    <!-- javascript -->
    <script type="text/javascript" src="Vista/js/cliente.js"></script>
    <!-- iconos -->
    <link href="Vista/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   </head>

<body>

  <!-- nav -->
  <?php require "Vista/html/navCli.php"; ?> 

  <!-- carrusel --> 
  <div id="datos">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
           <div class="col-md-10">
                <div id="demo" class="carousel slide" data-ride="carousel">
                
                  
                  
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="ima" src="Vista/img/plato.jpg"  >
                    </div>
                    <div class="carousel-item">
                      <img class="ima" src="Vista/img/bebida.jpg" >
                    </div>
                    <div class="carousel-item">
                      <img class="ima" src="Vista/img/ensalada.jpg" >
                    </div>
                    <div class="carousel-item">
                      <img class="ima" src="Vista/img/cupcake.jpg" >
                    </div>
                  </div>
                  
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                </div>
              </div>
              <div class="col-md-1"></div>  
          </div>
       </div> 
    </div>
  </div>

  <!-- footer -->
  <?php 
  require "Vista/html/footerCli.php"; 
  require "Vista/html/modalCliente.php";
  ?>
  <script>
  $(document).ready(function()
  {
   
    $('#datoc').hide();

  });

  </script>
  <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>
</body>

</html>


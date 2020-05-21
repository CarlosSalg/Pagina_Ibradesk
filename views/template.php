<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ibradesk</title>
    <link rel="icon" href="views/img/page/icono.png">
    
    <!-- jQuert -->
    <script src="views/assets/jquery/jquery.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="views/assets/fontawesome/css/all.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="views/assets/bootstrap/css/bootstrap.min.css">
    <script src="views/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Css Principal -->
    <link rel="stylesheet" href="views/assets/css/main.css">

</head>

<body>
    <!-- Navbar -->
    <?php include "views/modules/frame/navbar.php"; ?>

    <div class="contenedor-principal">


    <!-- Ruteo -->
    <?php 
    
    if(isset($_GET['route'])){


        $route = $_GET['route'];

        if($route == 'home' ||
            $route == 'aplicaciones'
        ){

            include 'views/modules/'.$route.'.php'; 

        }else{

            include 'views/modules/404.php'; 

        }

        


    }else{

        include 'views/modules/home.php'; 

    }
    
    ?>
    
    <!-- Footer -->
    <?php include "views/modules/frame/footer.php"; ?>
    </div>
    
    <!-- Popper -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>

</body>
</html>
<!DOCTYPE html>
  <html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
        <!-- Navbar 1 -->
        <div class="top-nav" id="home" style="background-color: #38AAF2;">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <p> <i class='bx bxs-envelope'></i> suporsinfo@gmail.com</p>
                        <p> <i class='bx bxs-phone-call'></i> (85) 9 1234.5678</p>
                    </div>
                    <div class="col-auto social-icons">
                        <a href="#"><i class='bx bxl-whatsapp'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-pinterest'></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar 2 -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#">Suport's <span class="dot"  style="color: #38AAF2;">Info</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastro.php">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="exibir.php">Exibir</a>
                        </li>
                    </ul>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="background-color: #38AAF2;border: #38AAF2" class="btn btn-brand ms-lg-3">Cadastro</a>
                </div>
            </div>
        </nav>
        <!--
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small class="text-muted">11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
        -->
        <?php
            include "conexao.php";
            $nome = $_POST['nome'];
            $inserir = $mysqli ->query("INSERT INTO cliente VALUES('0','$nome')");
            if($inserir){
                echo "Cadastro realizado";
            }else{
                echo "Não cadastrado";
            }
        ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>  
    </body>
  </html>
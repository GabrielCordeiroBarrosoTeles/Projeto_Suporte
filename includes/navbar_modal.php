<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/style.css">
<!-- Navbar 1 -->
<div class="top-nav" id="home" style="background-color: #38AAF2;">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <p> <i class='bx bxs-envelope'></i> suportsinfo@gmail.com</p>
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
                <a class="navbar-brand" href="index.php"><img src="./img/logo.png" alt="" srcset="" style="width: 90px;">Suport's <span class="dot"  style="color: #38AAF2;">Info</span></a>
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
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="background-color: #38AAF2;border: #38AAF2" class="btn btn-brand ms-lg-3">Login</a>
                </div>
            </div>
        </nav>









        <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-12 bg-cover"
                                style="background-image: url('https://raw.githubusercontent.com/GabrielCordeiroBarrosoTeles/gfngf/main/cordeirue%20(1).png'); min-height:250px;">
                                <div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form class="p-lg-5 col-12 row g-3" action="./recebe_login.php" method="post">
                                    <div>
                                        <h1>Login</h1>
                                    <p>Fell free to contact us and we will get back to you as soon as possible</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="userName" class="form-label">Nome</label>
                                        <input type="text" class="form-control" name="login" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                  =
                                    <div class="col-12">
                                        <label for="userName" class="form-label">Senha</label>
                                        <input type="password" class="form-control" name="senha" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                   
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand" style="background-color: #38AAF2;border: #38AAF2">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>      
        <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
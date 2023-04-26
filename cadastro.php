<!DOCTYPE html>
  <html>
    <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            ::-webkit-scrollbar{
                width: 10px;
            }::-webkit-scrollbar-track{
                background: #DD7E00;
                border-radius: 30px;
            }::-webkit-scrollbar-thumb{
                background: #000000;
                border-radius: 30px;
            }
legend{
    border: 1px solid dodgerblue;
    padding: 10px;
    text-align: center;
    background-color: dodgerblue;
    border-radius: 1px;
}
.inputBox{
    position: relative;
}
.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}

.labelInput{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5s;
}
.inputUser:focus ~ .labelInput,
.inputUser:valid ~ .labelInput{
    top: -20px;
    font-size: 12px;
    color: dodgerblue;
}
#data_nascimento{
    border: none;
    padding: 8px;
    border-radius: 10px;
    outline: none;
    font-size: 15px;
}
.submit{
    background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}
.input{
    background-color: white;
    width: 100%;
    border: none;
    padding: 15px;
    color: rgb(0, 0, 0);
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}
.phone{
    background-color: white;
    width: 100%;
    border: none;
    padding: 15px;
    color: rgb(0, 0, 0);
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}
#submit:hover{
    background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
}
    </style>
    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <?php include './includes/navbar.php'?>    



        <section class="container">
            <h1 style="text-align: center;" id="eventos">Cadastro Cliente</h1><br>
            <div class="row row-cols-1 row-cols-md-12 g-4">
                <div class="col">
                    <div class="card" id="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col s12">
                                    <!--Formulário-->
                                        <div class="container mt-5" style="background-color: rgba(0, 0, 0, 0.185);color: white;border-radius: 15px;">
                                            <div class="card" style="background-color: rgba(0, 0, 0, 0.3);border: 4px solid dodgerblue;border-radius: 10px;">
                                                <div class="card-header" style="text-align: center;background-color: dodgerblue;">
                                                    <legend><b>Cadastro</b></legend>
                                                </div>
                                                <div class="card-body" style="background-color: rgba(0, 0, 0, 0.6);color: white;border: 2px solid rgba(0, 0, 0, 0);border-radius: 3px;">
                                                    <form  action="cadastro.php" method="post" style="text-align:center;">
                                                        <fieldset> 
                                                            <br>
                                                            <br>
                                                            <div class="inputBox">
                                                                <input type="text" name="nome" id="nome" class="inputUser" required>
                                                                <label for="nome" class="labelInput">Nome</label>
                                                            </div>
                                                            <br>
                                                            <br>
                                                            <div class="inputBox">
                                                                <input type="number" name="cpf" id="cpf" class="inputUser" required>
                                                                <label for="cpf" class="labelInput">Cpf</label>
                                                            </div>
                                                            <br>
                                                            <br>
                                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                                <button  class="btn btn-primary submit" type="submit" name="action" style="margin: 10px;"> Enviar </button> 
                                                        </fieldset>
                                                    </form>
                                                </div> 
                                            </div>
                                        </div>
                                        <!--Termino do Formulário-->     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
 include 'conexao.php';
 $nome = isset($_POST["nome"])?$_POST["nome"]:0;

  $cpf = isset($_POST["cpf"])?$_POST["cpf"]:0;


  $inserir = $mysqli ->query("INSERT INTO cliente VALUES('','$nome','$cpf')");
 
    if($inserir){
    echo "Cadastro realizado";
    }else{
     echo "Não cadastrado";
    }
?>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
      <style type="text/css">
          input{
              color: black;
          }
          body{
              color: black;
          }
          </style>
    
    </head>

    <body>
            <?php   include "menu.php";     ?>

        
        <h4 class="black-text">PÁGINA RECEBE EDITAR</h4>
<?php
 include './conexao.php';
 
 $id = $_GET['id'];
 
 $sql = "SELECT * FROM cliente WHERE id='$id'";
 
 $query = $mysqli -> query($sql);
 
 while ($dados = $query-> fetch_assoc()){
     
   $id   = $dados['id'];
   $nome = $dados['nome'];
   
 echo '
   <form action="alterar.php" method="post">
      <table class="black-text">
        <tr>    
          <td>
            <label>ID do Cliente </label>
            <input class="black-text" type="text" name="id" value='.$id.'>
          </td>
          <td>
            <label>Nome do Cliente </label>
            <input type="text" name="nome" value='.$nome.'>
          </td>
          
         <td>
          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
           </button>
        </td>
       
      </tr>  
     </table> 
   </form> ';}?>
   
 



      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
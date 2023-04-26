<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css'rel='stylesheet'><!--Bootstrap-->
        <link href='https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css' rel='stylesheet'><!--Datatables-->
        <link rel="stylesheet" href="css/exibir.css"><!--Site-->
    </head>
    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <?php include './includes/navbar.php'?>
    
       <?php include './includes/table.php'?>
               
                <!--Bootstrap-->
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
                <!--Termino do Bootstrap-->
               
               <!--Datatables-->
                <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

                <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                
                <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

                <script>
                  $(document).ready(function () {
                    $('#example').DataTable();
                  });     
                </script>
                <!--Termino Datatables-->
              </body>
  </html>
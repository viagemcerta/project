<?php

session_start();
if(isset($_SESSION['login'])){
  echo ' <script>window.location.href = "painel.php"</script>';
}

include("connection.php");
?>

<!doctype html>
<html lang="en">
  <head>
  <style>
  .container{

    margin-top: 100px;
  }
  p{ 
    color: #FF914D;
  }
  
  </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>VIAGEM CERTA</title>
  </head>
  <body onload="msgLogout()">
 
  <div class="container primeiro">
    <h1 class="text-center text-uppercase titulo" onclick="clicks()">Viagem Certa</h1>
    <div class="mx-auto w-50 p-3" >
        <img class="rounded mx-auto d-block w-50 p-3" src="img/2.0.png">
       <a href="acessar.php"><button class="btn w-50 p-2 text-light mx-auto text-uppercase btn-block" style="background-color: #38B6FF;" type="button">Login</button></a> 
        <button type="button" class="btn btn-link modal1" data-toggle="modal" data-target="#ExemploModalCentralizado">
        Ainda não é cadastrado?
        </button>
        <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Ainda não é cadastrado?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                 <span aria-hidden="true">&times;</span>
                </button>
              </div>
             <div class="modal-body">
             Procure o administrador do sistema, para adquirir acesso!
             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
              </div>
           </div>
          </div>
        </div>

    </div>
  </div>

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/script.js" type="text/javascript" ></script>
    <script src="js/jquery.js" type="text/javascript" ></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
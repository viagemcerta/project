<?php


session_start();
if(isset($_SESSION['login'])){ 
  echo ' <script>
    window.location.href = "formClientes.php";
    </script>';
}





?>
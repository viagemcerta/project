<?php

include('header.php');
if(isset($_SESSION['login'])){ 
  
}else{ 
    echo ' <script>
    window.location.href = "index.php";
    </script>';
}

?>
<div class="text-center"> 
    <h1 style="color: #38B6FF">Análise</h1>
</div>


<?php 

include('footer.php');

?>
$("#cpf").mask("000.000.000-00");


function logout(){
var inativ = 0;
    
if(inativ == 0){ 
window.setTimeout(function testando(){
    
    window.location.href = "logout.php?id='.$idLogin.'";
    this.inativ = 1;
    
}, 10000);
}

}

function dataValida(){ 
    var x = document.getElementById("clienteData").value;
    var y = "1920-01-01";
    var z = "2002-01-01";
    console.log(z);
   if(x < y){ 
    document.getElementById("err").innerHTML = "DATA INVALIDA";
    $('#err').css("color","red");
    document.getElementById("addcliente").disabled = true;
    document.getElementById("clienteData").classList.add("is-invalid");

   }else if(x > z){
    document.getElementById("err").innerHTML = "DATA INVALIDA, CLIENTE MENOR DE 18  ANOS";
    $('#err').css("color","red");
    document.getElementById("addcliente").disabled = true;
    document.getElementById("clienteData").classList.add("is-invalid");

   }else{
    document.getElementById("err").innerHTML = "DATA VALIDA";
    $('#err').css("color","green");
    document.getElementById("clienteData").classList.remove("is-invalid");
    document.getElementById("clienteData").classList.add("is-valid");
    document.getElementById("addcliente").disabled = false;
   }

}






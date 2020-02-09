$("#cpf").mask("000.000.000-00");



//validacao de data de nascimento do cliente
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

   //validacao de data de abastecimento dos produtos 

   function dataAbastecimento(){ 
    var x = document.getElementById("abastecimento").value;
    var y = "2019-01-01";
    var z = new Date();
   if(x < y){ 
    document.getElementById("err").innerHTML = "DATA INVALIDA";
    $('#err').css("color","red");
    document.getElementById("produtos").disabled = true;
    document.getElementById("abastecimento").classList.add("is-invalid");

   }else if(new Date(x) > z){
    document.getElementById("err").innerHTML = "DATA INVALIDA";
    $('#err').css("color","red");
    document.getElementById("produtos").disabled = true;
    document.getElementById("abastecimento").classList.add("is-invalid");

   }else{
    document.getElementById("err").innerHTML = "DATA VALIDA";
    $('#err').css("color","green");
    document.getElementById("abastecimento").classList.remove("is-invalid");
    document.getElementById("abastecimento").classList.add("is-valid");
    document.getElementById("produtos").disabled = false;
   }

}

//validacão de datas para o formulário de vendas


function dataVendas(){ 
    var x = document.getElementById("partida").value;
    var y = new Date();
    var z = "2022-01-01"
    console.log(x);
   if(new Date(x) < y){ 
    document.getElementById("err").innerHTML = "DATA INVALIDA 1";
    $('#err').css("color","red");
    document.getElementById("vendas").disabled = true;
    document.getElementById("partida").classList.add("is-invalid");

   }else if(x > z){
    document.getElementById("err").innerHTML = "DATA INVALIDA 2";
    $('#err').css("color","red");
    document.getElementById("produtos").disabled = true;
    document.getElementById("partida").classList.add("is-invalid");

   }else{
    document.getElementById("err").innerHTML = "DATA VALIDA";
    $('#err').css("color","green");
    document.getElementById("partida").classList.remove("is-invalid");
    document.getElementById("partida").classList.add("is-valid");
    document.getElementById("vendas").disabled = false;
   }

   var a =  document.getElementById("chegada").value;
   if(a < x){ 
    document.getElementById("err2").innerHTML = "DATA INVALIDA";
    $('#err2').css("color","red");
    document.getElementById("vendas").disabled = true;
    document.getElementById("chegada").classList.add("is-invalid");

   }else{ 
    document.getElementById("err2").innerHTML = "DATA VALIDA";
    $('#err2').css("color","green");
    document.getElementById("chegada").classList.remove("is-invalid");
    document.getElementById("chegada").classList.add("is-valid");
    document.getElementById("vendas").disabled = false;

   }


}







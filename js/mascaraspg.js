   
function blockletras(keypress)
{
    // campo senha - bloqueia letras                               
    if(keypress>=48 && keypress<=57)
    {
        return true;
    }
    else{
        return false;
    }
 }

 function blocknumero(keypress)
{
    // campo nome - bloqueia numero                               
    if(keypress>=48 && keypress<=57)
    {
        return false;
    }
    else{
        return true;
    }
 }

 function Mascaracartao(keypress){
    if(keypress>=48 && keypress<=57){
        separador1 = '-';
        separador2 = '-';
        separador3 = '-';
        conjunto1 = 4;
        conjunto2 = 9;
        conjunto3 = 14;
        if(eval(document.cliente.cardnum.value.length) == conjunto1){
            document.cliente.cardnum.value=document.cliente.cardnum.value + separador1;                            
        }
        if (eval(document.cliente.cardnum.value.length) == conjunto2){
            document.cliente.cardnum.value=document.cliente.cardnum.value + separador2;                            
        }
        if (eval(document.cliente.cardnum.value.length) == conjunto3){
            document.cliente.cardnum.value=document.cliente.cardnum.value + separador3;                            
        }
        return true;
    }
    else{
        return false;
    }
 }

 function Mascaracep(keypress){
    if(keypress>=48 && keypress<=57){
        separador1 = '-';
        conjunto1 = 5;
        if(eval(document.cliente.cardnum2.value.length) == conjunto1){
            document.cliente.cardnum2.value=document.cliente.cardnum2.value + separador1;                            
        }
        return true;
    }
    else{
        return false;
    }
 }

 function confirmaMatriculas() {
      alert('Matricula confirmada nos cursos!');
      window.open('index.php');
    
  }


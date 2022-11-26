function Mascara (keypress){
    if (keypress>=48 && keypress<=57)
    {
        separador1= '(';
        separador2= ')';
        separador3= '-';
        conjunto1=0;
        conjunto2=3;
        conjunto3=9;
        if (eval(document.cadastro.telefone.value.length)== conjunto1)
        {
            document.cadastro.telefone.value = document.cadastro.telefone.value + separador1;
        }
        if (eval(document.cadastro.telefone.value.length)== conjunto2)
        {
            document.cadastro.telefone.value = document.cadastro.telefone.value + separador2;
        }
        if (eval(document.cadastro.telefone.value.length)== conjunto3)
        {
            document.cadastro.telefone.value = document.cadastro.telefone.value + separador3;
        }
        return true;

    }
    else
    {
        return false
    }
}

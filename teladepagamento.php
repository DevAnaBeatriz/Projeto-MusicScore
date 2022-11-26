<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">


</head>
<body>

<div class="container">

    <form action="" method="POST" onsubmit="confirmaMatriculas()" name="cliente"> 

        <div class="row">

            <div class="col">

                <h3 class="title">Endereço de cobrança</h3>

                <div class="inputBox">
                    <span>Nome :</span>
                    <input type="text" placeholder="João Sousa" required onkeypress="return blocknumero(window.event.keyCode)" maxlength="40">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="example@example.com" required maxlength="40">
                </div>
                <div class="inputBox">
                    <span>Endereço :</span>
                    <input type="text" placeholder="Rua morumbi, 51" required maxlength="50">
                </div>
                <div class="inputBox">
                    <span>Cidade :</span>
                    <input type="text" placeholder="São Paulo" required onkeypress="return blocknumero(window.event.keyCode)" maxlength="30">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Estado :</span>
                        <input type="text" placeholder="india" required onkeypress="return blocknumero(window.event.keyCode)" maxlength="30">
                    </div>
                    <div class="inputBox">
                        <span>CEP :</span>
                        <input type="text" placeholder="08060-010" required name="cardnum2" onkeypress="return Mascaracep(window.event.keyCode)" maxlength="9">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">Forma de pagamento</h3>

                <div class="inputBox">
                    <span>cartões aceitos:</span>
                    <img src="img/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>nome no cartão :</span>
                    <input type="text" placeholder="João Tadeu de Sousa" required onkeypress="return blocknumero(window.event.keyCode)" maxlength="40">
                </div>
                <div class="inputBox">
                    <span>Número do cartão de crédito :</span>
                    <input type="text" placeholder="1111-2222-3333-4444" required name="cardnum" onkeypress="return Mascaracartao(window.event.keyCode)" maxlength="19">
                </div>
                <div class="inputBox">
                    <span>Mês do cartão:</span>
                    <input type="text" placeholder="Janeiro" required onkeypress="return blocknumero(window.event.keyCode)" maxlength="20">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Ano do cartão :</span>
                        <input type="text" placeholder="2022" required onkeypress="return blockletras(window.event.keyCode)" maxlength="4">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="123" required onkeypress="return blockletras(window.event.keyCode)" maxlength="3">
                    </div>
                </div>

            </div>
    
        </div>
        <br><br>
        <button type="submit" class="submit-btn" value="Comprar">
            Compra
        </button>

     
        
      
    </form>
    </div>
        
    <script src="js/tuition.js"></script>
    <script src="js/confirma.js"></script>
    <script src="js/mascaraspg.js"></script>
</div>    
    
</body>
</html>
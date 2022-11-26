<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/matricula.css">
  <link rel="icon" href="img/favicon.ico">
</head>
<body>
  
  <main class="container mb-4">
    <div class="jumbotron bg-dark header-matricula text-light mt-3">
      <div class="container">
        <h1>Selecionar cursos</h1>
        <p class="lead">Selecione os cursos para os quais deseja se inscrever</p>
      </div>
    </div>

    <table class="table table-hover rounded-top">
      <thead class="thead-dark">
        <tr>
          <th scope="col"></th>
          <th scope="col">Curso</th>
          <th scope="col">Duração</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input onclick="adicionaCurso(this)" type="checkbox" name="curso" value="20"></td>
          <td>Cursos de teclado e piano</td>
          <td>20 horas</td>
        </tr>
        <tr>
          <td><input onclick="adicionaCurso(this)" type="checkbox" name="curso" value="30"></td>
          <td>Cursos de guitarra e Violão</td>
          <td>30 horas</td>
        </tr>
        <tr>
          <td><input onclick="adicionaCurso(this)" type="checkbox" name="curso" value="12"></td>
          <td>Aulas de violino</td>
          <td>12 horas</td>
        </tr>
        <tr>
          <td><input onclick="adicionaCurso(this)" type="checkbox" name="curso" value="25"></td>
          <td>Cursos de bateria</td>
          <td>25 horas</td>
        </tr>
        <tr>
          <td><input onclick="adicionaCurso(this)" type="checkbox" name="curso" value="26"></td>
          <td>Cursos de percussão</td>
          <td>26 horas</td>
        </tr>
        <tr>
          <td><input onclick="adicionaCurso(this)" type="checkbox" name="curso" value="15"></td>
          <td>Cursos de canto</td>
          <td>15 horas</td>
        </tr>
        <tr>
          <td><input onclick="adicionaCurso(this)" type="checkbox" name="curso" value="29"></td>
          <td>Cursos de áudio</td>
          <td>29 horas</td>
        </tr>
        <tr>
          <td><input onclick="adicionaCurso(this)" type="checkbox" name="curso" value="31"></td>
          <td>Curso de saxofone</td>
          <td>31 horas</td>
        </tr>
        <tr>
          <td><input onclick="adicionaCurso(this)" type="checkbox" name="curso" value="40"></td>
          <td>Cursos de cordas</td>
          <td>40 horas</td>
        </tr>
        <tr class="bg-dark text-light">
          <td>Total</td>
          <td class="js-total-de-cursos">0 Cursos</td>
          <td class="js-total-de-horas">0 Horas</td>
        </tr>
      </tbody>
    </table>
    
   <center><a href="botoes_pagamento.php" class="js-botao-matricula btn btn-outline-dark btn-lg mb-4"> Confirmar Registro</a></center> 
  </main>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/tuition.js"></script>
</body>
</html>
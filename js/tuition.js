let $tdTotalCursos = document.querySelector('.js-total-de-cursos');
let $tdTotalDeHoras = document.querySelector('.js-total-de-horas');
let $buttonConfirmar = document.querySelector('.js-botao-matricula');

let totalHoras = 0;
let totalCursos = 0;

function adicionaCurso(checkbox) {
  if (checkbox.checked) {
    totalCursos++;
    totalHoras += parseInt(checkbox.value);
  }
  else {
    totalCursos--;
    totalHoras -= parseInt(checkbox.value);
  }

  $tdTotalDeHoras.textContent = totalHoras + ' Horas';
  $tdTotalCursos.textContent = totalCursos + ' Cursos';
}

$buttonConfirmar.onclick = confirmaMatriculas;


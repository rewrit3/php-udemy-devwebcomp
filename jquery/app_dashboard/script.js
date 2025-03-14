$(document).ready(() => {
  $('#link-documentacao').on('click', () => {
    // $('#pagina').load('documentacao.html');

    $.get('documentacao.html', data => {
      $('#pagina').html(data);
    });
  });

  $('#link-suporte').on('click', () => {
    // $('#pagina').load('suporte.html');

    $.get('suporte.html', data => {
      $('#pagina').html(data);
    });
  });

  $('#competencia').on('change', event => {
    let competency = $(event.target).val();

    // ajax
    // método, url, dados, sucesso, erro
    $.ajax({
      type: 'GET',
      url: 'app.php',
      data: `competencia=${competency}`, // x-www-form-urlencoded
      dataType: 'json',
      success: data => {
        $('#numero_vendas').html(data.numberSales);
        $('#total_vendas').html(data.totalSales);
      },
      error: error => {
        console.log(error);
      },
    });
  });
})
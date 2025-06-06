$(document).ready(() => {
  $('#link-documentacao').on('click', () => {
    $.get('documentacao.html', data => {
      $('#pagina').html(data);
    });
  });

  $('#link-suporte').on('click', () => {
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
        $('#clientes_ativos').html(data.activeClients);
        $('#clientes_inativos').html(data.inactiveClients);

        console.log(data);
      },
      error: error => {
        console.log(error);
      },
    });
  });
})
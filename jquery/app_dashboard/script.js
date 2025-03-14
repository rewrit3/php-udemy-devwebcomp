$(document).ready(() => {
  // $('#link-dashboard').on('click', () => {
  //   $('#pagina').load('index.html');
  // });

  $('#link-documentacao').on('click', () => {
    // $('#pagina').load('documentacao.html');

    $.get('documentacao.html', data => {
      $('#pagina').html(data);
    });

    // $.post('documentacao.html', data => {
    //   $('#pagina').html(data);
    // });
  });

  $('#link-suporte').on('click', () => {
    // $('#pagina').load('suporte.html');

    $.get('suporte.html', data => {
      $('#pagina').html(data);
    });

    // $.post('suporte.html', data => {
    //   $('#pagina').html(data);
    // });
  });
})
(function ($) {
    $(document).ready(function () {
      // Manipula o evento de clique nos checkboxes
      $('.govbr-theme-settings-cards-container input[type="checkbox"]').on('click', function () {
        var feature = $(this).attr('name');
        var value = $(this).prop('checked') ? 'true' : 'false';
  
        // Envia a requisição AJAX usando o objeto jQuery $.ajax()
        $.ajax({
          url: '/wp-admin/admin-ajax.php',
          type: 'POST',
          data: {
            action: 'theme_toggle_feature',
            feature: feature,
            value: value
          },
          success: function (response) {
            // Manipula a resposta de sucesso, se necessário
            console.log(response);
          },
          error: function (error) {
            // Manipula a resposta de erro, se necessário
            console.error(error);
          }
        });
      });
    });
  })(jQuery);
  
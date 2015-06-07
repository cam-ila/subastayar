$(function() {
  $('.btn-destroy').on('click', function(event){
    event.preventDefault();
    if (confirm('Esta seguro que desea realizar esta accion?')){ $(this).closest('form').submit() }
  });

  $(".sortable-table").stupidtable();

  $('[data-toggle="tooltip"]').tooltip();

  $(document).on('change', '.js-filter-form', function() {
    var categoryId = $('.js-filter-form option:selected').val();
    if (categoryId != 0) {
      var url = $(this).data('url') + categoryId;
    } else { var url = '/'; }

    window.location = url;
  });

});

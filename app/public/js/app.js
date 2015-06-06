$(function() {
  $('.btn-destroy').on('click', function(event){
    event.preventDefault();
    if (confirm('Esta seguro que desea realizar esta accion?')){ $(this).closest('form').submit() }
  });

  $(".sortable-table").stupidtable();

  $('[data-toggle="tooltip"]').tooltip();

  $(document).on('change', '.js-filter-form', function() {
    window.location = $(this).data('url') + $('.js-filter-form option:selected').val();
  });

});

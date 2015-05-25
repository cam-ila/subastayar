$(function() {
  // menu
  $('.btn-destroy').on('click', function(event){
    event.preventDefault();
    if (confirm('Esta seguro que desea realizar esta accion?')){
      $(this).closest('form').submit();
    }
  });
  $(".sortable-table").stupidtable();
  $('[data-toggle="tooltip"]').tooltip()
});

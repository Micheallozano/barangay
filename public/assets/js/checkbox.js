$(document).ready(function() {
$(":checkbox").on("change", function() {
    var chx = $(this).is(':checked');
    $(this).closest('tr').find('input:text, select').prop("disabled", chx);
  });
});
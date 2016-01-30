$(function() {
  reset();
});
$('#fView .fa-edit').click(function() {
  $('#fView input, #fView textarea, #fView select').attr('disabled', false);
  $('#fView button').removeClass('hidden');
});
$('#fView button.btn-danger').click(function() {
  reset();
});
var reset = function() {
  $('#fView input[type="text"], #fView textarea, #fView select').attr('disabled', true);
  $('#fView button').addClass('hidden');
};
var getEvent = function() {
  if($('#nav input[name="evId"]').val().length > 0) {
    window.location.href ='/anand/admin/event/' + $('#nav input[name="evId"]').val();
  }
}
var getCollege = function() {
  if($('#nav input[name="collId"]').val().length > 0) {
    window.location.href = '/anand/admin/college/' + $('#nav input[name="collId"]').val();
  }
}
var empty = function() {
  $('#fEnter input, #fEnter textarea, #fEnter select').val('');

}

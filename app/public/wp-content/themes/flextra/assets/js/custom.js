function flextra_mobile_menu_open() {
  jQuery(".side_nav").addClass('show');
}
function flextra_mobile_menu_close() {
  jQuery(".side_nav").removeClass('show');
}

jQuery(function($){
  $('.toggle').click(function () {
        flextra_Keyboard_loop($('.side_nav'));
    });
});

var flextra_Keyboard_loop = function (elem) {
  var flextra_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');
  var flextra_firstTabbable = flextra_tabbable.first();
  var flextra_lastTabbable = flextra_tabbable.last();
  flextra_firstTabbable.focus();

  flextra_lastTabbable.on('keydown', function (e) {
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      flextra_firstTabbable.focus();
    }
  });

  flextra_firstTabbable.on('keydown', function (e) {
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      flextra_lastTabbable.focus();
    }
  });

  elem.on('keyup', function (e) {
    if (e.keyCode === 27) {
      elem.hide();
    };
  });
};
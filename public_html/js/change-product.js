var val = location.search;
var num = val.replace(/[^0-9]/g, '');

$(function(){
  $('#idNum' + num).slideDown().addClass('active');
  var index = $('.content').index($('.active'));
    if (index == 0) {
        $('.change-prev-btn').hide();
    } else if (index == $('.content').length - 1) {
        $('.change-next-btn').hide();
    }
    $('.change-product').click(function(){
      var display = $('.active');
      display.removeClass('active');
      if ($(this).hasClass('change-next-btn')) {
        display.next().addClass('active');
      } else {
        display.prev().addClass('active');
      }
      $('.content').hide();
      $('.active').slideDown();
      var index = $('.content').index($('.active'));
      $('.change-product').slideDown();
        if (index == 0) {
            $('.change-prev-btn').hide();
        } else if (index == $('.content').length - 1) {
            $('.change-next-btn').hide();
        }
     });
});

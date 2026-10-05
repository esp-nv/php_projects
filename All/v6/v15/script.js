
$(document).ready(function() {

  $(".menu-icon").removeClass('close');
  $(".menu-icon").click(function () {
      $(".navigation").toggleClass('open', '');
  });
  

  $(".menu-icon").removeClass('change');
    $(".menu-icon").click(function () {
        $(".menu-icon").toggleClass('change', '');
    });

});
  
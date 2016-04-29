$(function() {

  // Burger w/ Overlay automation
  var burger = $('.burger');
  var overlay = $('#overlay');

  burger.click(function() {

    $(this).toggleClass('selected');

    if ($(this).hasClass('selected')) {

      overlay.removeClass('hide').addClass('animated fadeIn').one('animationend', function() {

        $(this).removeClass('animated fadeIn').addClass('show');

      });

    } else {

      overlay.removeClass('show').addClass('animated fadeOut').one('animationend', function() {

        $(this).removeClass('animated fadeOut').addClass('hide');

      });

    };

  });

  // Item drop down automation in smaller viewports
  var item_accord = $('.item-accordian');
  var bungee = $('.expand');

  bungee.click(function() {

    $(this).toggleClass('expand contract');

    $(this).parent().next().slideToggle();

  });

  // Active item selected in larger viewports
  var item = $('.item-accordian');

  if (parseInt($(this).width()) > 1360) {

    var first = $('.item-wrapper>li').first();

    first.first().addClass('active');

    item.click(function() {

      $(this).addClass('active').siblings().removeClass('active');

    });

  }

  // Sign Up form fadeIn on btn click
  var form = $('.signup');
  var signup_btn = $('.download-btn');
  var signup_overlay = $('#overlay-signup');

  signup_btn.click(function() {

    $(this).toggleClass('selected');

    if ($(this).hasClass('selected')) {

      signup_overlay.removeClass('hide').addClass('animated fadeIn').one('animationend', function() {
        $(this).removeClass('animated fadeIn').addClass('show');
      });

    }

  });

  // Sign Up form fadeOut on overlay click
  signup_overlay.click(function(e) {

    var clicked = $(e.target);

    if (clicked.is($('#overlay-signup'))) {

		  signup_overlay.addClass('animated fadeOut').one('animationend', function() {
        $(this).removeClass('animated fadeOut').addClass('hide');
      });

      signup_btn.removeClass('selected');

    } else {

      return;

   }

  });

  // Active states of inputs
  $('.signup').find('input, textarea').on('keyup blur focus', function (e) {

    var $this = $(this),
        label = $this.prev('label');

  	  if (e.type === 'keyup') {
  			if ($this.val() === '') {
            label.removeClass('active highlight');
          } else {
            label.addClass('active highlight');
          }
      } else if (e.type === 'blur') {
      	if( $this.val() === '' ) {
      		label.removeClass('active highlight');
  			} else {
  		    label.removeClass('highlight');
  			}
      } else if (e.type === 'focus') {

        if( $this.val() === '' ) {
      		label.removeClass('highlight');
  			}
        else if( $this.val() !== '' ) {
  		    label.addClass('highlight');
  			}
      }

  });

  // Form toggle between sign up and log in.
  $('.tab').on('click', function (e) {

    e.preventDefault();

    // Toggle the active state of the clicked li.
    $(this).addClass('active');
    $(this).siblings().removeClass('active');

    // Store the anchor tag link of the clicked li.
    target = $(this).find('a').attr('href');

    // Find the div inside of the tab-content container which is not the target of the above li anchor tag and hide it.
    $('.tab-content > div').not(target).hide();

    $(target).fadeIn(600);

  });

});

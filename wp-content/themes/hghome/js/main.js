// console.log("main.js is connected");

// add active class to current_page_item
function addClass(className, selector, ifMultiple) {
  if (ifMultiple) {
    var active = document.querySelectorAll(selector);
    // console.log(active);
    for (var i = 0, element; (element = active[i]); i++) {
      active[i].classList.add(className);
    }
  } else {
    var active = document.querySelector(selector);
    if (active !== null) {
      // console.log(active);
      active.classList.add(className);
    }
  }
}

addClass("active", "li.current-menu-item", false);
addClass("nav-link", "li.nav-item a", true);

function addText(text, selector) {
  var element = document.querySelector(selector);
  if (element !== null) {
    element.innerHTML = element.innerHTML + " " + text;
  }
}

addText("<span class='sr-only'>(current)</span>", "li.current-menu-item a");

//
// scroll into view animation
// https://stackoverflow.com/questions/16325679/activate-css3-animation-when-the-content-scrolls-into-view
//
$(document).ready(function() {
  var $animation_elements = $(".off-screen");
  var $window = $(window);

  function check_if_in_view() {
    var window_height = $window.height() - 150;
    var window_top_position = $window.scrollTop();
    var window_bottom_position = window_top_position + window_height;

    $.each($animation_elements, function() {
      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = element_top_position + element_height;

      //check to see if this current container is within viewport
      if (
        element_bottom_position >= window_top_position &&
        element_top_position <= window_bottom_position
      ) {
        $element.addClass("in-view");
        console.log("in-view");
      } else {
        $element.removeClass("in-view");
      }
    });
  }

  $window.on("scroll resize", check_if_in_view);
  $window.trigger("scroll");
});

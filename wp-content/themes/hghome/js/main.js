//main javascript functions

//add active class to current_page_item
function addClass(className, selector, ifMultiple) {
  if (ifMultiple) {
    var active = document.querySelectorAll(selector);
    //console.log(active);
    for (var i = 0, element; element = active[i]; i++) {
    	active[i].classList.add(className);
		}
  }
  else {
  	var active = document.querySelector(selector);
    if (active !== null) {
      //console.log(active);
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

addText("<span class='sr-only'>(current)</span>", 'li.current-menu-item a');


console.log("main.js is connected");

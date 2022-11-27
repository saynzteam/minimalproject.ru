////// Preload Some Function ////////

window.onload = function() {
  document.body.classList.add('loaded');
}

window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 500);
  }


///////// Nav + SlowScroll /////////

function navburger() {
  var x = document.getElementById("nav");
  x.classList.toggle("hidden");
}

function slowScroll (id) {
  var offset = 0;
  $('html, body').animate ({
      scrollTop: $(id).offset ().top - offset
  }, 500)
  return false;
}

//////////// Trailer /////////////

function toggle(){
  var screen = document.querySelector(".trailer")
  var video = document.querySelector("video")
  screen.classList.toggle("active")
  video.pause();
  video.currentTime = 0;
}

/////////// FAQ /////////////////

      $('.question-and-answer').click(function() {
          $(this).find(".answer").toggleClass("hidden")
          $(this).find(".question-chevron").toggleClass("hidden")
      })


////////// SUPER LOG  ///////////

console.log(
  '%cMinimal RolePlay',
  'color: #5ec39e; font-size: 50px;' +
  'background: #29282c; font-family: Nunito;' +
  'text-shadow: 3px 3px 3px black'
);

console.log(
  '%cSaynz / Lucifer / ImBubble',
  'color: #5ec39e; font-size: 20px;' +
  'background: #29282c; font-family: Nunito;' +
  'text-shadow: 3px 3px 3px black'
);

console.log(
  '%cContacts - vk.com/saynz',
  'color: gray; font-size: 15px;' +
  'background: #29282c; font-family: Nunito;' +
  'text-shadow: 3px 3px 3px black'
);
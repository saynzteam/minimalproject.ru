
if (window.screen.width >= 1024) {
	AddSlickJs()
}

function AddSlickJs() {
	var addslick = document.getElementById("slickview");
	addslick.classList.add("grid-rows-2");
	addslick.classList.remove("grid-rows-none");
}

$('.grid-rows-2').slick({
 	infinite: true,
 	slidesToShow: 2,
	slidesToScroll: 2,
	autoplay: true,
  	autoplaySpeed: 6000,
 });

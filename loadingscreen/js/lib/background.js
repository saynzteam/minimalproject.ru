const listImg = ["img0", "img1", "img2", "img3", "img4", "img5", "img6", "img7", "img8", "img9", "img10"], n = listImg.length, body = $("#bg2"), bg = $("#bg");
body.css({
    backgroundImage: "url(images/" + listImg[Math.floor(7 * Math.random())] + ".jpg)",
    backgroundRepeat: "no-repeat",
    backgroundSize: "cover"
})
function a() {
    var o = Math.floor(7 * Math.random());
    bg.hide().css({
        backgroundImage: "url(images/" + listImg[++o % n] + ".jpg)"
    }).delay(5e3).fadeTo(5000, 1, function () {
        body.css({
            backgroundImage: "url(images/" + listImg[o % n] + ".jpg)",
            backgroundRepeat: "no-repeat",
            backgroundSize: "cover"
        })
        a();
    });
};
a();
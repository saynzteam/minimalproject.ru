
var isGmod = false;
var isTest = false;
var downloadingFileCalled = false;
var percentage = 0;

function loadAll() {
  $("nav").fadeIn();
  $("main").fadeIn();

  setTimeout(function () {
    if (downloadingFileCalled) {
      announce(
        "Друг ты первый раз здесь, поэтому ты будешь тем кто получит minimal+!",
        true
      );
    }
  }, 10000);
}

function setLoad(percentage) {
  $(".overhaul").css("left", percentage + "%");
}
var permanent = false;
function announce(message, ispermanent) {
  if (Config.enableAnnouncements && !permanent) {
    $("#announcement").hide();
    $("#announcement").html(message);
    $("#announcement").fadeIn();
  }
  if (ispermanent) {
    permanent = true;
  }
}


$(document).ready(function () {


  if (
    Config.announceMessages &&
    Config.enableAnnouncements &&
    Config.announcementLength
  ) {
    if (Config.announceMessages.length > 0) {
      var i = 0;
      setInterval(function () {
        announce(Config.announceMessages[i]);
        i++;
        if (i > Config.announceMessages.length - 1) {
          i = 0;
        }
      }, Config.announcementLength);
    }
  }

  setTimeout(function () {
    if (!isGmod) {
      isTest = true;
      loadAll();
    }
  }, 1000);
});

$(function () {
  $(".loads").typed({
    strings: ["Загрузка.\n\n\n\n\n\n\n\n .\n\n\n\n\n\n\n\n.\n\n\n\n\n\n\n\n"],
    typeSpeed: 20,
    startDelay: 1,
    backSpeed: 30,
    backDelay: 3,
    loop: true,
    // loopCount: false,
  });
});

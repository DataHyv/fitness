function seeMore() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}

$(function () {
  function rescaleCaptcha() {
    var width = $(".g-recaptcha").parent().width();
    var scale;
    if (width < 302) {
      scale = width / 302;
    } else {
      scale = 1.0;
    }

    $(".g-recaptcha").css("transform", "scale(" + scale + ")");
    $(".g-recaptcha").css("-webkit-transform", "scale(" + scale + ")");
    $(".g-recaptcha").css("transform-origin", "0 0");
    $(".g-recaptcha").css("-webkit-transform-origin", "0 0");
  }

  rescaleCaptcha();
  $(window).resize(function () {
    rescaleCaptcha();
  });
});

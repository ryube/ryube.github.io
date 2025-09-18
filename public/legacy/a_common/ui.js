/* window width for mobile */
function innerWidth(insertDom) {
  var a = "window width : " + $(window).innerWidth();
  $(insertDom).html(a);
}
$(window).resize(function () {
  innerWidth(".windowWidth");
});

/* page load */
function pageTargetLoad(linked, target) {
  $(target).empty();

  $.ajax({
    url: linked,
    cache: false,
  })
    .done(function (html) {
      $(target).append(html);
      ajaxComp();
    })
    .fail(function () {
      // 무한 로딩 방지: 이미 에러 페이지면 재호출하지 않음
      if (linked !== "a_contents/error.html") {
        pageTargetLoad("a_contents/error.html", ".container");
      }
    });
}

function ajaxComp() {
  //console.log('ajaxComp()');
}

/* hash page load */
function hashLoad() {
  var targetClass = ".container";
  if (location.hash == "") {
    var hashtag = $(".nav .on").attr("href");
    hashtag = hashtag.substring(1, hashtag.length);
  } else {
    var hashtag = location.hash.substring(1, location.hash.length);
    var hashSplit = hashtag.split("/");
    $(".nav a").removeClass("on");
    if (hashSplit[0] == "a_work") {
      $(".nav a.work").addClass("on");
    } else {
      $(".nav a").each(function (e) {
        if ($(this).attr("href") == location.hash) {
          $(this).addClass("on");
        }
      });
    }
  }
  pageTargetLoad(hashtag, targetClass);
}

/* document ready */
$(document).ready(function () {
  innerWidth(".windowWidth");

  $(".nav a").click(function () {
    $(".nav a").removeClass("on");
    $(this).addClass("on");
  });
});

/* onload */
window.onload = function () {
  hashLoad();
  $(window).bind("hashchange", function () {
    hashLoad();
  });
};

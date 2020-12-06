(function ($) {
  'use strict';

  function _interopDefaultLegacy (e) { return e && typeof e === 'object' && 'default' in e ? e : { 'default': e }; }

  var $__default = /*#__PURE__*/_interopDefaultLegacy($);

  // listOpen
  function listOpen() {
    var vars = {
      $list: $__default['default']('.responsive__list'),
      $boxBtn: $__default['default']('.responsive__box'),
      $html: $__default['default']('<div class="open-block"></div>'),
      height: 0,
      pos: 0,
    };

    // 뷰포트 변경되면 전부 닫기
    function viewChange() {
      if ($__default['default']('.open-block').length) {
        vars.$boxBtn.removeClass('open');
        $__default['default']('.open-block').remove();
      }
    }

    //다른 열에서 생성 확인 하기 위해 저장
    function storeIndex(i) {
      vars.$html.data({ row: vars.row, index: i });
    }

    //트렌지션 트리거
    function boxAddClass(t) {
      setTimeout(function() {
        t.addClass('active--ani');
      }, 25);
    }

    //다른 열에서 열렸을때 자연스럽게 닫힘, 박스 제거로 인한 인덱스 값 보정
    function boxClose($t, diff) {
      $t.removeClass('active--ani');
      setTimeout(function() {
        $t.remove();
        var i = diff ? vars.$html.data('index') - 1 : vars.$html.data('index');
        vars.$html.data('index', i);
      }, 650);
    }
    function boxClone(s) {
      vars.$html.append(
        $__default['default'](s)
          .find('.responsive__box-clone')
          .clone()
      );
      setTimeout(function() {
        vars.$html.find('.responsive__box-clone:not(.state--before)').addClass('state--current');
      }, 25);
    }

    function boxOpen(btn, idx) {
      vars.$boxBtn.removeClass('open');
      vars.$html.find('.state--before').remove();
      // 컨텐츠 복사
      if (vars.$html.data('row') == vars.row) {
        //console.log('같은줄');
        vars.$html
          .find('.state--current')
          .removeClass('state--current')
          .addClass('state--before');
        boxClone(btn);
        scrollMove(btn);
      } else {
        //console.log('같은줄');
        //아래로 열릴때 스크롤 위치 보정
        var diff = vars.$html.data('row') < vars.row;
        scrollMove(btn, diff);

        boxClose($__default['default']('.open-block.active--ani'), diff);
        vars.$html = $__default['default']('<div class="open-block"></div>');
        boxClone(btn);
        vars.$boxBtn.eq(vars.pos).after(vars.$html);
        boxAddClass(vars.$html);
      }
      storeIndex(idx);
      setTimeout(function() {
        vars.height = vars.$html.outerHeight();
      }, 700);
    }

    function scrollMove(t, c) {
      var desOffset = $__default['default'](t).offset();
      var go = desOffset.top;
      if (c) {
        go = go - vars.height;
      }
      $__default['default']('html,body')
        .stop(true, false)
        .animate({ scrollTop: go }, 700);
    }
    function init() {
      vars.$boxBtn.off().on('click.openbox', function(event) {
        event.preventDefault();
        var idx = $__default['default'](this).index();
        var openBoxIdx = $__default['default']('.open-block').index();
        idx = idx > openBoxIdx && !(openBoxIdx === -1) ? idx - 1 : idx;
        vars.col = Math.floor(vars.$list.width() / vars.$boxBtn.innerWidth());
        vars.totalRow = Math.ceil(vars.$boxBtn.length / vars.col);
        vars.row = Math.floor(idx / vars.col); // 열
        vars.pos = (vars.row + 1) * vars.col - 1; // 박스 위치

        if (vars.$html.data('index') == idx) {
          return false;
        }

        // 마지막 줄은 끝 엘리먼트에 위치
        if (vars.totalRow - 1 == vars.row) {
          vars.pos = vars.$boxBtn.length - 1;
        }
        // log;
        // console.log('****************************************************');
        // console.log('vars.col==:' + vars.col, 'vars.pos === ', vars.pos);
        // console.log('전체 열 갯수 =========================:' + vars.totalRow, 'vars.$boxBtn.length  : ', vars.$boxBtn.length, 'vars.col :', vars.col, Math.floor(vars.$boxBtn.length / vars.col));
        // console.log('현재 열 ====:' + vars.row);
        // console.log('vars.$html.data("index") :' + vars.$html.data('index'));
        // console.log('idx =======:' + idx);
        // console.log('****************************************************');
        boxOpen(this, idx);
        $__default['default'](this).addClass('open');
      });
    }

    return {
      init: init,
      remove: viewChange,
    };
  }

  var mqls = [
    window.matchMedia("(max-width: 760px)"),
    window.matchMedia("(min-width:1001px) and (max-width: 1100px)"),
    window.matchMedia("(min-width:1101px)")
  ];
  var pcPaticle = function() {
    var msie = document.documentMode || 10;
    if (!(msie < 10)) {
      particlesJS.load("dot-particles", "/particles/dot.json", function() {
        $__default['default'](".particles,.sub__particles").addClass("loaded");
      });
      particlesJS.load("line-particles", "/particles/rain.json", function() {
        // console.log('particle-pcPaticle');
      });
    } else {
      $__default['default'](".bg--replace").addClass("add--bg");
    }
  };
  var isMobile = false;
  // var isPC = false;
  var mobilePaticle = function() {
    if (!$__default['default']("html").hasClass("ie-legacy")) {
      particlesJS.load("dot-particles", "/particles/dot-m.json", function() {
        $__default['default'](".particles,.sub__particles").addClass("loaded");
      });
      particlesJS.load("line-particles", "/particles/rain-m.json", function() {});
    } else {
      $__default['default'](".bg--replace").addClass("add--bg");
    }
  };

  function mediapoint() {
    function mediaqueryresponse(mql) {
      if (mqls[2].matches) {
        $__default['default']("body").attr("class", "view-1300");
        window.nps.reponsiveList.remove();
        pcPaticle();
        isMobile = false;
      } else if (mqls[1].matches) {
        $__default['default']("body").attr("class", "view-1100");
        window.nps.reponsiveList.remove();
        pcPaticle();
        isMobile = false;
      } else if (mqls[0].matches) {
        if (!isMobile) {
          $__default['default']("body").attr("class", "view-760");
          window.nps.reponsiveList.remove();
          mobilePaticle();
        }
        isMobile = true;
      } else ;
    }
    for (var i = 0; i < mqls.length; i++) {
      mediaqueryresponse();
      mqls[i].addListener(mediaqueryresponse);
    }
  }

  window.nps = {
    mediaquery: mediapoint
  };
  $__default['default'](function() {
    $__default['default'](window).on("mousewheel DOMMouseScroll", function() {
      $__default['default']("html, body").stop();
    });

    $__default['default'](".valueslider").flexslider({
      animation: "slide",
      easing: "easeinout",
      directionNav: true,
      controlNav: false,
      slideshow: false,
      animationSpeed: 500,
      keyboard: false,
      touch: true,
      start: function(slider) {
        $__default['default'](".valueslider__counter").text(
          slider.currentSlide + 1 + "/" + slider.count
        );
      },
      after: function(slider) {
        $__default['default'](".valueslider__counter").text(
          slider.currentSlide + 1 + "/" + slider.count
        );
      }
    });
    $__default['default']("[data-gtag-event]").click(function() {
      if (!(typeof gtag === "undefined")) {
        var payload = $__default['default'](this).data("gtag-event");
        payload = JSON.parse(JSON.stringify(payload));
        gtag("event", payload["name"], {
          event_category: payload["category"],
          event_label: payload["label"]
        });
      }
    });
    nps.reponsiveList = listOpen();
    nps.reponsiveList.init();
  });
  $__default['default'](window).load(function() {
    nps.mediaquery();
  });

}(window.jQuery));
//# sourceMappingURL=main.bundle.js.map

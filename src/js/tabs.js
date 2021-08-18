import $ from "jquery";







// // аккордеон --------
$(document).ready(function (e) {
  let titleTab = $(".akr-title-js");
  $(".akr-drop-js").slideUp(0).removeClass("act");

  titleTab.on("click", function () {

    let dropTab = $(this).siblings(".akr-drop-js");
    let imgTab = $(this).find(".akr-item-img-js");
    let parent = $(this).parent(".akr__item");

    

    if ($(this).hasClass("act")) {


      $(this).removeClass("act");
      dropTab.slideUp(200).removeClass("act");
      imgTab.removeClass("akr-item-img-js-active")
      
    } else {

$(this).addClass("act");
dropTab.addClass("act").slideDown(200);
imgTab.addClass("akr-item-img-js-active")
   
$(".akr__item").not(parent).find(".akr-drop-js").slideUp(200);
    $(".akr__item").not(parent).find(".akr-title-js").removeClass("act");
    $(".akr__item")
      .not(parent).find(".akr-item-img-js ").removeClass("akr-item-img-js-active");
    }
  });
});


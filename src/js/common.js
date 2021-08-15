//-- этот import нужно подключать в каждый файл, чтобы jquery работала
import $ from "jquery";
// import Plyr from "plyr";
// ------------------------------------------------



$(window).on("load", function() {
    $(".cssload").delay(200).fadeOut("slow");
});

// $(document).ready(function (e) {

//     $("input").on("blur", function () {
//         $(this).next("i").css("opacity", "0")

//     }); 
//     })
[].forEach.call(document.querySelectorAll('img[data-src]'), function (img) {
    img.setAttribute('src', img.getAttribute('data-src'));
    img.onload = function () {
        img.removeAttribute('data-src');
    };
  });
  
  $(document).ready(function (e) {  
    var a = $("._span-cheap")
    a.hide( 0);
    $(".bunner__cheap").mouseover( function (event) { 
        $(this).find(" ._span-cheap ").show(200)
  }).mouseleave(
    function (event) { 
        $(this).find(" ._span-cheap ").hide( 200);
    } 
  )
  }); 




  $(document).ready(function (e) {
    $(".menu-tab ").slideUp(0) 
    $(".menu__item--tab ").hover( function (event) { 
        var a =   $(this).find(" .menu-tab ")

        if ($(this).hasClass("act")) { 
            a.slideUp(200)
            $(this).removeClass("act")
            $(this).find("svg").css("transform", "translateY(-50%) rotate(90deg)");
        } else {
            a.slideDown(200)
            $(this).addClass("act")
            $(this).find("svg").css("transform", "translateY(-50%) rotate(-90deg)");
         }
  })
    }); 
















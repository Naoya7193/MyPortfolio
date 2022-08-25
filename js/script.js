// WORKSとABOUTページのheaderに色付け
const uri = new URL(window.location.href).pathname.slice(1);
console.log(uri);
$(window).on("load", function(){

    if(uri === "works"){
        $('.js-works').addClass('is-recolor');
        console.log("success works")
    } else if(uri === "about"){
        $('.js-about').addClass('is-recolor');
        console.log("success about")
    }

});

// ふりがなが消える
$(window).on("scroll load resize", function(){

    const header_height = document.getElementById('js-height').clientHeight;
    const scroll = $(window).scrollTop();
    console.log(scroll)

    if (scroll > header_height ) {
        $('.js-hide').addClass('is-hide');
        $('.js-header').addClass('is-shorter');
    } else {
        $('.js-hide').removeClass('is-hide');
        $('.js-header').removeClass('is-shorter');
    }
});

// スクロール中はヘッダーが隠れる
let id = false;
$(window).on("scroll touchmove",function(){
    $('.l-header').css('top','-200px');

    if(id) clearTimeout(id);

    id = setTimeout(function(){
        $('.l-header').css('top','0');
    },800);
});

// ハンバーガーメニュー
$(function() {
    $('.js-humberger').click(function() {
        $('.l-header').toggleClass('is-open');
    });
});
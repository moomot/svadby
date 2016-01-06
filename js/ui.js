
$(document).ready(function () {
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 7000
    });

    $('.gb_container').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        dots: true,
        customPaging: function(slider, i) {
            var a = slider.$slides.eq(i).find(".ava img").attr("src");
            //return '<button type="button" data-role="none" role="button" aria-required="false" tabindex="0">' + (i + 1) + '</button>';
            return '<a class="dot-item"><img src="'+a+'"/></a>';
        }
    });
    $('.faq_container').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        dots: true,
        customPaging: function(slider, i) {
            //return '<button type="button" data-role="none" role="button" aria-required="false" tabindex="0">' + (i + 1) + '</button>';
            return i+1;
        }
    });

    $(".tab11").find(".readfull").click(function (e) {
        e.preventDefault();
        if($(this).hasClass("hide_me")) {
            $(this).removeClass("hide_me");
            $(this).parent().css("height", "379px");
            $(this).parent().css("padding-bottom", "0");
            $(this).prev().fadeIn("fast");

        } else {
            $(this).addClass("hide_me");
            $(this).parent().css("height", "auto");
            $(this).parent().css("padding-bottom", "70px");
            $(this).prev().fadeOut("fast");
        }
    });
    $('.order-call').click(function (e) {
        e.preventDefault();
        $(".call").arcticmodal();
    });

    $('.footer-call').click(function (e) {
        e.preventDefault();
        $(".footer-call-modal").arcticmodal();
    });


    $('.read-about1').click(function (e) {
        e.preventDefault();
        $(".modal1").arcticmodal();
    });
    $('.read-about2').click(function (e) {
        e.preventDefault();
        $(".modal2").arcticmodal();
    });
    $('.read-about3').click(function (e) {
        e.preventDefault();
        $(".modal3").arcticmodal();
    });
    $('.read-about4').click(function (e) {
        e.preventDefault();
        $(".modal4").arcticmodal();
    });
    $('.read-about5').click(function (e) {
        e.preventDefault();
        $(".modal5").arcticmodal();
    });
    $('.parko-otel').click(function (e) {
        e.preventDefault();
        $(".modal6").arcticmodal();
    });
    $('.villa-ester').click(function (e) {
        e.preventDefault();
        $(".modal7").arcticmodal();
    });
    $('.torre-de-palme').click(function (e) {
        e.preventDefault();
        $(".modal8").arcticmodal();
    });

    $('.parko-otel-order').click(function (e) {
        e.preventDefault();
        $(".parko-otel-order-modal").arcticmodal();
    });
    $('.fortino-order').click(function (e) {
        e.preventDefault();
        $(".fortino-order-modal").arcticmodal();
    });
    $('.kastelani-order').click(function (e) {
        e.preventDefault();
        $(".kastelani-order-modal").arcticmodal();
    });

    $('.parko-otel-in').click(function (e) {
        e.preventDefault();
        $(".modal9").arcticmodal();
    });
    $('.fortino-in').click(function (e) {
        e.preventDefault();
        $(".modal11").arcticmodal();
    });
    $('.kastelani-in').click(function (e) {
        e.preventDefault();
        $(".modal10").arcticmodal();
    });


    // parko-otel villa-ester torre-de-palme


    $(".close").click(function (e) {
        $.arcticmodal('close');
        e.preventDefault();
    })

    $('.get_article').click(function (e) {
        e.preventDefault();
        $(".article").arcticmodal();
    });
    $('.ask_question').click(function (e) {
        e.preventDefault();
        $(".question").arcticmodal();
    });
    $('.office_btn').click(function (e) {
        e.preventDefault();
        $(".office").arcticmodal();
    });
    $('.order_call_podr').click(function (e) {
        e.preventDefault();
        $(".problem").arcticmodal();
    });

    $('input[type="tel"]').mask("(999) 999-99-99");

    $(window).resize(function () {
        resize_benefits();
    });
    resize_benefits();
});

// Resize benefits function
function resize_benefits() {
    console.log($(document).width());
    var $benefits = $(".benefits");
    var width = 0;
    var max_cols = 3;

    var document_width = $(document).width();
    if(document_width <=1043) max_cols = 2;

    for(var i = 0; i < max_cols; i++)
        width += $benefits.find("li").eq(i).width();

    $benefits.css({
        width: width+10
    });
}
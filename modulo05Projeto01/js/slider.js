$(function () {
    var curSlide = 0;
    var maxSlide = $(".banner_single").length - 1;
    var delay = 3;

    initSlider();
    changeSlide();

    function initSlider() {
        $(".banner_single").hide();
        $(".banner_single").eq(0).show();
        for (var i = 0; i < maxSlide + 1; i++) {
            var content = $(".bullets").html();
            if (i == 0) {
                content += '<span class="active_slide"></span>';
            } else {
                content += "<span></span>";
            }
            $(".bullets").html(content);
        }
    }
    function changeSlide() {
        setInterval(function () {
            $(".banner_single").eq(curSlide).stop().fadeOut(2000);
            curSlide++;
            if (curSlide > maxSlide) {
                curSlide = 0;
            }
            $(".banner_single").eq(curSlide).stop().fadeIn(2000);
            //troca os bullets
            $(".bullets span").removeClass("active_slide");
            $(".bullets span").eq(curSlide).addClass("active_slide");
        }, delay * 1000);
    }
    $("body").on("click", ".bullets span", function () {
        var currentBullets = $(this);
        $(".banner_single").eq(curSlide).stop().fadeOut(1000);

        curSlide = currentBullets.index();
        $(".banner_single").eq(curSlide).stop().fadeIn(1000);

        $(".bullets span").removeClass("active_slide");

        currentBullets.addClass("active_slide");
    });
});

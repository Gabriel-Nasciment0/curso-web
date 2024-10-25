$(function () {
    var curSlide = 0;
    var maxSlide = $(".banner-single").length - 1;
    var delay = 5;

    initSlider();
    changeSlide();

    function initSlider() {
        $(".banner-single").hide();
        $(".banner-single").eq(0).show();
        for (var icon = 0; icon < maxSlide + 1; icon++) {
            var content = $(".bullets").html();
            if (icon == 0) {
                content += '<span class="active-slide"></span>';
            } else {
                content += "<span></span>";
            }
            $(".bullets").html(content);
        }
    }

    function changeSlide() {
        setInterval(function () {
            $(".banner-single").eq(curSlide).stop().fadeOut(1000);
            curSlide++;
            if (curSlide > maxSlide) curSlide = 0;
            $(".banner-single").eq(curSlide).stop().fadeIn(1000);
            // trocar slide

            $(".bullets span").removeClass("active-slide");
            $(".bullets span").eq(curSlide).addClass("active-slide");
        }, delay * 1000);
    }

    $("body").on("click", ".bullets span", function () {
        var currentBullet = $(this);
        $(".banner-single").eq(curSlide).stop().fadeOut(1000);
        curSlide = currentBullet.index();
        $(".banner-single").eq(curSlide).stop().fadeIn(1000);

        $(".bullets span").removeClass("active-slide");
        currentBullet.addClass("active-slide");
    });
});

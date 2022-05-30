//SVGアニメーションの描画
const stroke = new Vivus('mask', {
    start:'manual',
    type: 'scenario-sync',
    duration: 80,
    forceRender: false,
    animTimingFunction:Vivus.EASE,
}
);

$(window).on('load',function(){
    $("#splash").delay(2000).fadeOut('slow');
    $('#splash_logo').fadeIn(0),
    $("#splash_logo").delay(2000).fadeOut('slow');
        stroke.play();
});

$(function(){
    $(".btn-gnavi").on("click", function(){
        // ハンバーガーメニューの位置を設定
        var rightVal = 0;
        if($(this).hasClass("open")) {
            // 位置を移動させメニューを開いた状態にする
            rightVal = -300;
            // メニューを開いたら次回クリック時は閉じた状態になるよう設定
            $(this).removeClass("open");
        } else {
            // メニューを開いたら次回クリック時は閉じた状態になるよう設定
            $(this).addClass("open");
        }
        $("#global-navi").stop().animate({
            right: rightVal
        }, 200);
    });
});

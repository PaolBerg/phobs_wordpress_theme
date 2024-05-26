
//jquery for mouse over functions on the front page cover gallery 


$(document).ready(function () {


    $(".img-responsive").bind("mouseenter", function () {
        //$(this).animate({opacity: 0}, '1000'); 
        $(this).attr("src", $(this).attr("blur"));

    });

    $(".img-responsive").bind("mouseleave", function () {
        // $(this).animate({opacity: 1}, '1000');
        $(this).attr("src", $(this).attr("original"));
    });

    $(".wp-caption").removeAttr('style');
    $(".size-medium").removeAttr('style');


    $("#comment").css('max-width', '100%');


    $("#submit").css('max-width', '100%');


    var singleUrlShared;
    var titleShared;

    $(".responsive1").bind("click", function () {

        var singleUrlShared = $("#imgShared").attr("data-a2a-url", $(this).attr("src"));
        var titleShared = $("#imgShared").attr("data-a2a-title", $(this).attr("title"));

    });

    $('<div id = "imgShared" class="a2a_kit a2a_kit_size_32 addtoany_list" data-a2a-url="' + singleUrlShared + '" data-a2a-title="' + titleShared + '" ><a class="a2a_button_facebook"></a>  <a class="a2a_button_twitter"></a><a class="a2a_button_google_plus"></a>   </div>').appendTo(" .lb-outerContainer ");


    if ('object' == typeof a2a) a2a.init('page');


    
});

  





$(document).ready(function(){
    $("#topbanner").on("click", function(){
        $("#wrapper").load(base_url + "index.php/home");
    });
    $("#wrapper").on({
        "mouseenter": function(){
            $(this).css("background-color","pink");
        },
        "mouseleave": function(){
            $(this).css("background-color","transparent");
        },
        "click": function(){
            $("#wrapper").load(base_url + "index.php/buy");
        }
    }, "#moveout");
});

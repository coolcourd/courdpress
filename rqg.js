$("#getIt").click(function(){
$("#all").css("min-height", "500px");

$("#quote").fadeOut();
setTimeout(function(){

$.getJSON("https://talaikis.com/api/quotes/random/", function(a) {
$("#quote").html(JSON.stringify(a.quote + "''" + "<br>-" + a.author) + '<br><a href="https://twitter.com/intent/tweet?text=" id="tweet">tweet it<i></i></a><br>')
$("i").addClass("fa fa-twitter")
$("#tweet").addClass("small")
$("#tweet").attr("target","_blank")
$("#tweet").attr("rel","external")

$("#tweet").attr("href","https://twitter.com/intent/tweet?text=" + JSON.stringify(a.quote + "-" + a.author));
$("#quote").fadeIn();
});
}, 400);
});

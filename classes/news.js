$(document).ready(function(){
	var newsCount=2;
	$("button").click(function(){
		newsCount=newsCount+2;
		$("#hirek").load("./classes/load-news.php", {
			count : newsCount
		});
	});
});

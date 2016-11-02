

function doSomething(arg) {
	//var galH = setTimeout(function(){setInterval(function(){$('.gallery').css("height", window.innerWidth*0.38)},1)},1000
    $('.gallery').animate({width : '40%', marginLeft : '30%', marginTop : "-3%"}, 1000);
	$('#ee').animate({width : '100%', height : '100%', marginLeft : 0, marginTop : "-4%"},1000);
    $('#anim').animate({marginTop : '50%'}, 1000);
	$('#next').animate({opacity : 1}, 1000);
	$('#prev').animate({opacity : 1}, 1000);
    $('.gallery').css("box-shadow", "0px 0px 2px 5px black");
	$('#imgShow').attr("src",arg);
			var bg1 = document.getElementById("imgShow").src;;
		var cleanup = /\"|\'|\)/g;
		var bg2 = bg1 .split('/').pop().replace(cleanup, '');
        var bg3 = bg2.replace('.jpg','');
        var bg4=String(bg3);
		var inte = parseInt(bg4);
		if(inte<8){
			$('#imgShow').css("margin-top", '15%');
		}else{
			$('#imgShow').css("margin-top", '5%');

		}

}

function changeColor(photo){
	if(photo>7){
		//$('.gallery').css("background-color", "black");
	}else{
		//$('.gallery').css("background-color", "white");
	}
	$('.gallery').css("background-color", "white");
}
function closeGal(){
	$('.gallery').animate({width : 0, margin : window.innerWidth/2, marginTop : '50%'},1000);
	$('#ee').animate({height : 0, width : 0, margin : window.innerWidth/2, marginTop : '50%'},1000);
	$('#anim').animate({marginTop : '0%'}, 1000);
	$('#next').animate({opacity : 0}, 1000);
	$('#prev').animate({opacity : 0}, 1000);
        setTimeout(function(){$('.gallery').css("box-shadow", "0px 0px 0px 0px white");},1000);

}
$(function(){
	$('#next').click(function() {
		var bg1 = document.getElementById("imgShow").src;;
		var cleanup = /\"|\'|\)/g;
		var bg2 = bg1 .split('/').pop().replace(cleanup, '');
        var bg3 = bg2.replace('.jpg','');
        var bg4=String(bg3);
		var inte = parseInt(bg4);inte +=1;
		if(inte>12){
			inte = 1;
		}
		changeColor(inte);
		var inte2 = String(inte);
		console.log(5 + 6);
		var inte2 = String(inte);
		console.log(inte2+".jpg");
		if(inte<8){
			$('#imgShow').css("margin-top", '15%');
		}else{
			$('#imgShow').css("margin-top", '5%');

		}
		$('#imgShow').attr("src","visitor/images/gallery/"+inte2+".jpg");
        //$('.gallery').css("background-image", "url(visitor/images/news/gallery/"+inte2+".jpg)");
	});
});
$(function(){
	$('#prev').click(function() {
		var bg1 = document.getElementById("imgShow").src;;
		var cleanup = /\"|\'|\)/g;
		var bg2 = bg1 .split('/').pop().replace(cleanup, '');
        var bg3 = bg2.replace('.jpg','');
        var bg4=String(bg3);
		var inte = parseInt(bg4);inte -=1;
		if(inte<1){
			inte = 12;
		}
		changeColor(inte);
		var inte2 = String(inte);
		console.log(5 + 6);
		var inte2 = String(inte);
		console.log(inte2+".jpg");
		if(inte<8){
			$('#imgShow').css("margin-top", '15%');
		}else{
			$('#imgShow').css("margin-top", '5%');

		}
		$('#imgShow').attr("src","visitor/images/gallery/"+inte2+".jpg");
        //$('.gallery').css("background-image", "url(visitor/images/news/gallery/"+inte2+".jpg)");
		/*$('.gallery').animate({opacity : 0}, 750);
		setTimeout(function(){$('.gallery').animate({opacity : 1}, 750);},750);

		setTimeout(function(){$('.gallery').css("background-image", "url(images/gallery/"+inte2+".jpg)");},750);*/
	});
});
setInterval(function(){
 $("#1").load(function() {
  //alert('I loaded!');
});
},1);
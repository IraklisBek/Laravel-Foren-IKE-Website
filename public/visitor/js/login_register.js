var bool1 = true;
function signup(){
    closeLog();
    document.getElementById('signup').style.display="block";
    if(bool1){
        $('#signup').animate({height : 500, width : 500, margin : window.innerWidth/2 - 250, marginTop : '8%'},500);
        bool1=false;
    }
}
function closeSign(){
    $('#signup').animate({height : 0, width : 0, margin : window.innerWidth/2, marginTop : '25%'},500);
    bool1=true;
    setTimeout(function(){		document.getElementById('signup').style.display="none"; }, 500);
}
var bool2 = true;
function login(){
    $('#resetForm').css('display', 'none');
    $('#loginForm').css('display', 'block');
    $('#resetSpan').css('display', 'block');
    closeSign();
    document.getElementById('login').style.display="block";
    if(bool2){
        $('#login').animate({height : 250, width : 500, marginLeft : window.innerWidth/2 - 250, marginTop : '10%'},500);
        bool2=false;
    }
}
function closeLog(){
    $('#login').animate({height : 0, width : 0, marginLeft : window.innerWidth/2 , marginTop : '25%'},500);
    bool2=true;
    setTimeout(function(){	document.getElementById('login').style.display="none"; }, 500);
}

function reset(){
    $('#resetForm').css('display', 'block');
    $('#loginForm').css('display', 'none');
    $('#resetSpan').css('display', 'none');
}
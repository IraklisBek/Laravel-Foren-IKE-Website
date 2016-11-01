<!DOCTYPE html>
<html>
<head></head>
<h3>3D Model</h3>
<?php
if(substr($x, -2)=="mm"){
$x=substr($x, 0, -2);
}
if(substr($z, -2)=="mm"){
$z=substr($z, 0, -2);
}
if(substr($y1, -2)=="mm"){
$y1=substr($y1, 0, -2);
}
if(substr($y2, -2)=="mm"){
$y2=substr($y2, 0, -2);
}
if(substr($y3, -2)=="mm"){
$y3=substr($y3, 0, -2);
}
if($kind=="A0"){
    $kind2="Plain";
}
if($kind=="A1"){
    $kind2="Ventilation";
}
if($kind=="A2"){
    $kind2="Handles";
}
if($kind=="A3"){
    $kind2="Ventilation with Handles";
}
?>

<body>
<img src="<?php echo $message->embed($image); ?>" style='width:80%; margin-left:10%;'>
<p style='font-size:22px; color:black;'>Thank you for using the <a href="{{ route('3dmodel') }}" class="blueLink" target="_blank" style='color:rgb(29,91,104) !important'><span >FORENBOX 3DModel</span></a>. Your FORENBOX code is:</p>
<p style='font-size:19px; color:black;'>FB-{{$x}}X{{$z}}X{{$y1}}X{{$y2}}-{{$kind2}}-H{{$y3}}</p>
<p style='font-size:19px; color:black;'>ForenBox: {{$kind2}}
<br>Long sides: {{$x}}mm
<br>Height of Long sides: {{$y1}}mm
<br>Short sides: {{$z}}mm
<br>Height of Short sides: {{$y2}}mm
<br>Height of Corners: {{$y3}}mm</p>
</body>
</html>


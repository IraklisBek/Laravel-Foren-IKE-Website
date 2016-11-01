@extends('visitor.main')

@section('title', '| 3D Model')

@section('stylesheets')
    {!! Html::style('visitor/css/3dmodel.css') !!}
    <style>
        #foot{
            display:none;
        }
    </style>
@endsection

@section('content')

    <div id="loading">
        <img alt="loading" src=visitor/images/general/loading.gif class="loading">
    </div>

    <div id ="webGL-container">
    </div>
    <div id="tablee">
        Long sides<br>
        <input type=text name="x" id="x" value="210mm" style="color:black"><br>
        Height of Long sides:<br>
        <input type=text name="y1" id="y1" value="60mm" style="color:black"><br>
        Short sides:<br>
        <input type=text name="z" id="z" value="130mm" style="color:black"><br>
        Height of Short sides:<br>
        <input type=text name="y2" id="y2" value="60mm" style="color:black"><br>
        Height of FORENCLEAT:<br>
        <input type=text name="y3" id="y3" value="65mm" style="color:black"><br>
        <label><input style="width:20px; vertical-align: middle; margin: 0px;" id="original" type="radio" name="sex" onchange="installModel('visitor/3DModels/theOriginal6.dae')">Plain FORENBOX</label><br>
        <label><input style="width:20px; vertical-align: middle; margin: 0px;" id="xeria" type="radio" name="sex" onchange="installModel('visitor/3DModels/theXeroulia6.dae')">Handles</label><br>
        <label><input style="width:20px; vertical-align: middle; margin: 0px;" id="tripes" type="radio" name="sex" onchange="installModel('visitor/3DModels/theTripes666.dae')">Ventilation holes</label><br>
        <label><input style="width:20px; vertical-align: middle; margin: 0px;" id="xeriatripes" type="radio" name="sex" onchange="installModel('visitor/3DModels/theXerouliaTripes66.dae')">Handles and Ventilation holes</label><br>
        <p id="check" style="width:60%; padding:3px;  background-image:url('/visitor/images/general/3dbuttons.jpg'); background-size:100% 100%; cursor:pointer; text-align:center;border-radius:5px" onclick="change()">Build</p>
        <p >Left click to Rotate</p >
        <p >Right click to Move</p >
        <p >Scroll to Zoom</p >
    </div>
    <div id="webglSupport2" class="support">
        <p>WebGl is not enabled in your Browser.</p>
    </div>
    <div id="webglSupport" class="support">
        <p>WebGl is not enabled in your Browser. Open the Safari menu and select Preferences.<br>
            Then, click the Advanced tab in the Preferences window.<br>
            Then, at the bottom of the window, check the Show Develop menu in menu bar checkbox.<br>
            Then, open the Develop menu in the menu bar and select Enable WebGL.<br>
        </p>
    </div>
    <div id="errorss">
        <p id="au" class="error">• Long sides must be over 150mm and less than 400mm</p>
        <p id="ao" class="error">• Long sides must be over 150mm and less than 400mm</p>
        <p id="bu" class="error">• Short sides must be over 105mm and less than 300mm</p>
        <p id="bo" class="error">• Short sides must be over 105mm and less than 300mm</p>
        <p id="ho" class="error">• Height must be over 33mm and less than 100mm</p>
        <p id="hu" class="error">• Height must be over 33mm and less than 100mm</p>
        <p id="co" class="error">• FORENCLEATS must be over 40mm and less than 120mm</p>
        <p id="cu" class="error">• FORENCLEATS must be over 40mm and less than 120mm</p>
        <p id="aaa" class="error">• Corners cannot be lower than the sides</p>
        <p id="xu" class="error">• For handles: Height of Short sides must be over 60mm</p>
        <p id="trWunder" class="error">• For Ventilation: Short sides must be more than 120mm and Long sides must be more than 170mm</p>
        <p id="trHunder" class="error">• For Ventilation: Short sides must be more than 120mm and Long sides must be more than 170mm</p>
        <p id="xWunder" class="error">• For Handles: Short sides must be more than 150mm</p>
    </div>
    <div class="properly">If the 3dmodel does not  <br>load properly please <a class=blueLink href="{{ route('3dmodel') }}">refresh</a></div>

@endsection

@section('scripts')
    <script type=text/javascript src=/visitor/js/three/three.min.js></script>
    <script type=text/javascript src=/visitor/js/three/ColladaLoader.js></script>
    <script type=text/javascript src=/visitor/js/three/CanvasRenderer.js></script>
    <script type=text/javascript src=/visitor/js/three/OrbitControls.js></script>
    <script type=text/javascript src=/visitor/js/model.js></script>
    <script>
    $(document).ready(function(){
        $("#bt").click(function() {
            renderer.setClearColor("white");
            setTimeout(function(){window.open( renderer.domElement.toDataURL("image/png"), "Final");renderer.setClearColor("black");},500);
            document.getElementById("bt").download  ="ForenBox_"+"" + $('#x').val()+ "X"+$('#z').val()+ "X"+$('#y1').val()+ "X"+$('#y2').val()+ "-"+$('#y3').val() + ".png"    ;
            $(this).attr('href', renderer.domElement.toDataURL("image/png"));
            c();
        });
    });
    function c() {
        /*var mail= //echo json_encode($username);
        var rate_value;

        if (document.getElementById('original').checked) {
            rate_value = "A0";
        }if (document.getElementById('tripes').checked) {
            rate_value = "A1";
        }if (document.getElementById('xeria').checked) {
            rate_value = "A2";
        }if (document.getElementById('xeriatripes').checked) {
            rate_value = "A3";
        }
        if (window.XMLHttpRequest) {
            xmlhttp=new XMLHttpRequest();
        } else {
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.open("GET","../save.php?x="+ $('#x').val()+ "&z="+ $('#z').val()+ "&y1="+ $('#y1').val()+ "&y2="+ $('#y2').val()+ "&y3="+ $('#y3').val()+ "&kind="+ rate_value + "&email="+ mail,true);
        xmlhttp.send();*/
    }
    </script>
@endsection



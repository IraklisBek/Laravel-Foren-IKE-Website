@extends('visitor.main')

@section('title', '| Products')
@section('stylesheets')
    {{ Html::style('visitor/css/bootstrap.min.css') }}
    {!! Html::style('visitor/css/products.css') !!}
@endsection
@section('content')
    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:100%;margin:0 auto; overflow-x:hidden; overflow-y:hidden; margin-top:5%">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto; margin-left:-0.5%;">
            <ul class="amazingslider-slides" style="display:none;">
                <li><a href="#" id="spforen_cleat"><img src="visitor/images/slideshow/foren_cleat.jpg" alt="foren_cleat" title="foren_cleat" id="img1"/></a></li>
                <li><a href="#" id="spcontro"><img src="visitor/images/slideshow/Automatic_machine_for_the_vision_control.jpg" alt="Automatic machine for the vision control" title="Automatic machine for the vision control" id="img2"/></a></li>
                <li><a href="#" id="spassembly"><img src="visitor/images/slideshow/Assembly_machine_of_foldable.jpg" alt="Assembly machine of foldable crates or boxes" title="Assembly machine of foldable crates or boxes" id="img3"/></a></li>
                <li><a href="#" id="sppress"><img src="visitor/images/slideshow/Automatic_press_machine.jpg" alt="Automatic_press_machine" title="Automatic_press_machine" id="img4"/></a></li>
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="visitor/images/slideshow/thumbnails/foren_cleat-tn.jpg" alt="forenboxes" title="forenboxes" /></li>
                <li><img src="visitor/images/slideshow/thumbnails/Automatic_machine_for_the_vision_control-tn.jpg" alt="forenbox_production" title="forenbox_production" /></li>
                <li><img src="visitor/images/slideshow/thumbnails/Assembly_machine_of_foldable-tn.jpg" alt="Automatic_press_machine" title="Automatic_press_machine" /></li>
                <li><img src="visitor/images/slideshow/thumbnails/Automatic_press_machine-tn.jpg" alt="Automatic_machine_for_the_vision_control" title="Automatic_machine_for_the_vision_control" /></li>
            </ul>
            <div class="amazingslider-engine" id="amazingslider-engine"><a href="http://amazingslider.com" title="JavaScript Image Slideshow">JavaScript Image Slideshow</a></div>
        </div>
    </div>
    <div style="width:100%; box-shadow:0 -5px 5px -5px rgb(29, 91, 104); margin-top:3%;">
        <span style="visibility:hidden">a</span>
    </div>
    <h1>Products</h1>
    <img alt="hr" src=visitor/images/general/megaligrammi.png class=bigLine>

    <!-- PW01 -->


    <div class="products">
        <img src=visitor/images/products/forenboxes_press_machine.jpg alt="forenboxes press machine" class="imgs" id="imgs1">
        <p class="title" id="pp1">PW-01<img id="p1" alt="f" src=visitor/images/general/VELOSKATO.png class="arrow"><br>
            <span class="subTitle">Innovated automatic press<br>
								   machine for FORENBOX boards</span></p>
        <div id="p11">
            <img id="product11" alt="press machine" src=visitor/images/products/press_machine.jpg class="hiddenImgs" style="width:140%; margin-left:-10%">
            <p class="hiddenP hiddenPtext">
                Automatic cutting and engraving of the FORENBOX boards<br>
                Easy to operate and regulate<br>
                Automatic feeder of the boards<br>
                Automatic stacking system<br>
                Quality control equipment<br>
                Production up to 3000 boards/h
            </p>
        </div>
    </div>
    <img alt="hr" src=visitor/images/general/megaligrammi.png class=bigLine>

    <!-- /PW01 -->

    <!--******************************************************************************************************************************-->


    <!-- FB01 -->

    <div class="products">
        <img src=visitor/images/products/forenboxes_assembly_machine.jpg alt="ff" class="imgs" id="imgs2">
        <p class="title" id="pp2">FB-01<img id="p2" alt="f" src=visitor/images/general/VELOSKATO.png class="arrow"><br>
            <span class="subTitle">Innovated automatic assembly<br>
								   machine of FORENBOX</span></p>
        <div id="p22" >
            <img id="product22" alt="press machine" src=visitor/images/products/fbmachine.jpg class="hiddenImgs" style="width:170%; margin-left:-30%">
            <p class="hiddenP hiddenPtext" style="margin-top:-5%">
                Automatic cutting and machining of the corners FORENCLEAT<br>
                Automatic feeder of the boards<br>
                Automatic stacking system of the finished crates<br>
                Quality control equipment<br>
                Production up to 3000 boxes/h<br>
            </p>
        </div>
    </div>
    <img alt="hr" src=visitor/images/general/megaligrammi.png class=bigLine>

    <!-- /FB01 -->

    <!--******************************************************************************************************************************-->

    <!-- C320 -->

    <div class="products">
        <img src=visitor/images/products/quality_control_machine.jpg alt="ff" class="imgs" id="imgs3">
        <p class="title" id="pp3">C-320<img id="p3" alt="f" src=visitor/images/general/VELOSPANO.png class="arrow"><br>
            <span class="subTitle">Innovated automatic machine for<br>
									the quality control of conventional<br>
									crates</span></p>
        <div id="p33">
            <p class="hiddenP hiddenPtext">
                <span style="visibility:hidden;">a</span><br>Innovated vision control of the quality of crates<br>
                Automatic evacuation of the defected crates<br>
                Statistical analysis of the quality parameters<br>
            </p>
        </div>
    </div>
    <img alt="hr" src=visitor/images/general/megaligrammi.png class=bigLine>

    <!-- /C320 -->

    <!--******************************************************************************************************************************-->

    <!-- FCLEAT -->

    <div class="products">
        <img src=visitor/images/products/foren_cleat.png  alt="ff" class="imgs" id="imgs4" style="width:25%; margin-left:15%; margin-top:15%">
        <p class="title" id="pp4" style="margin-left:8%">FORENCLEAT<!--<img id="p4" alt="f" src=images/VELOSPANO.png class="arrow">--><br>
            <span class="subTitle" >The innovated patented FOREN<br>
			product</span></p>
        <div id="p44" style="display:none;">
        </div>

    </div>
    <img alt="hr" src=visitor/images/general/megaligrammi.png class=bigLine>

    <!-- /FCLEAT -->

    <!--******************************************************************************************************************************-->
@endsection

@section('scripts')
    {{ Html::script('visitor/sliderengine/amazingslider.js') }}
    {{ Html::style('visitor/sliderengine/amazingslider-1.css') }}
    {{ Html::script('visitor/sliderengine/initslider-1.js') }}

    <script>
        setTimeout(function(){
            var body = document.body,
                html = document.documentElement;
            var height = Math.max( body.scrollHeight, body.offsetHeight,
                html.clientHeight, html.scrollHeight, html.offsetHeight );
            $('#amazingslider-wrapper-1').click(function(event){
                if(event.clientY<height/12 && event.clientX >window.innerWidth/18 && event.clientX < window.innerWidth/1.13)
                    $('html, body').animate({scrollTop : $('#p1').offset().top - window.innerHeight/1.8},800);
            });
        },2000);
        setInterval(function(){
            $('.title').css("font-size", window.innerWidth*0.049);
            $('.hiddenPtitle').css("font-size", window.innerWidth*0.065);
            $('.hiddenPsubTitle').css("font-size", window.innerWidth*0.022);
            $('.subTitle').css("font-size", window.innerWidth*0.025);
            $('.hiddenPtext').css("font-size", window.innerWidth*0.017);
            $('h1').css("font-size", window.innerWidth*0.035);
        },1);
        var bigbool=true;
        var bigbool2=true;
        $("#product11").click(function(){
            if(bigbool){
                $("#product11").animate({width : "170%", marginLeft : "-25%"},500);
                bigbool=false;
            }else{
                $("#product11").animate({width : "140%", marginLeft : "-10%"},500);
                bigbool=true;
            }
        });
        $("#product22").click(function(){
            if(bigbool2){
                $("#product22").animate({width : "200%", marginLeft : "-45%"},500);
                bigbool2=false;
            }else{
                $("#product22").animate({width : "170%", marginLeft : "-30%"},500);
                bigbool2=true;
            }
        });
    </script>
@endsection



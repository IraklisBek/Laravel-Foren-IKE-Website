@extends('visitor.main')

@section('title', '| Forenbox')
@section('stylesheets')
    {!! Html::style('visitor/css/forenbox.css') !!}
@endsection
@section('content')
    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:100%;margin:0 auto; overflow-x:hidden; overflow-y:hidden; margin-top:5%">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto; margin-left:-0.5%;">
            <ul class="amazingslider-slides" style="display:none">
                <li><a href="#"><img  src="/visitor/images/slideshow/forenbox_logo.jpg" alt="sforenbox_logo" title="ForenBox Logo"/></a></li>
                <li><a href="#"><img src="/visitor/images/slideshow/strawberies.jpg" alt="sstrawberies" title="The ForenBox" /></a></li>
                <li><a href="#"><img src="/visitor/images/slideshow/forenboxes.jpg" alt="sforenboxes" title="ForenBoxes" /></a></li>
                <li><a href="#"><img src="/visitor/images/slideshow/forenbox_production.jpg" alt="sforenbox_production" title="Production" /></a></li>
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="/visitor/images/slideshow/thumbnails/forenbox_logo-tn.jpg" alt="forenboxes" title="forenboxes" /></li>
                <li><img src="/visitor/images/slideshow/thumbnails/strawberies-tn.jpg" alt="forenbox_production" title="forenbox_production" /></li>
                <li><img src="/visitor/images/slideshow/thumbnails/forenboxes-tn.jpg" alt="Automatic_press_machine" title="Automatic_press_machine" /></li>
                <li><img src="/visitor/images/slideshow/thumbnails/forenbox_production-tn.jpg" alt="Automatic_machine_for_the_vision_control" title="Automatic_machine_for_the_vision_control" /></li>
            </ul>
            <div class="amazingslider-engine" id="amazingslider-engine"><a href="http://amazingslider.com" title="JavaScript Image Slideshow">JavaScript Image Slideshow</a></div>
        </div>
    </div>
    <div style="width:100%; box-shadow:0 -5px 5px -5px rgb(29, 91, 104); margin-top:3%;">
        <span style="visibility:hidden">a</span>
    </div>
    <!-- FIRST SECTION -->

    <div id="first-section">
        <h2>Innovated technology<br>
            for folded crates<br>
        </h2>
        <img src=/visitor/images/forenbox/animated_forenbox.gif alt="animated forenbox" class="animatedForenbox">
        <ul id="ul1" class="uls">
            <li>No glue or metallic stiches</li>
            <li>Elegant crate for premium quality products</li>
            <li>Folded material made from foldable plywood or carton</li>
            <li>High resistance-Low weight</li>
        </ul>
        <img alt="hr" src=/visitor/images/general/megaligrammi.png class="bigLine">
    </div>
    <!-- /FIRST SECTION -->

    <!--******************************************************************************************************************************-->

    <!-- SECOND SECTION -->
    <div id="second-section">
        <h2>Innovated<br>
            stable connection<br>
            between the parts<br>
        </h2>
        <img src=/visitor/images/forenbox/forencleat.png class="forenCleat"  alt="forencleat">

        <ul id="ul2" class="uls">
            <li>Innovated double secure connection</li>
            <li>Mechanical connection</li>
            <li>No glue or metallic parts</li>
            <li>Material 100% recyclable</li>
            <li>Approved for food packaging</li>
            <li>Secure stacking</li>
        </ul>
        <img alt="hr" src=/visitor/images/general/megaligrammi.png class="bigLine">
    </div>
    <!-- /SECOND SECTION -->

    <!--******************************************************************************************************************************-->

    <!-- THIRD SECTION -->
    <div id="third-section" >
        <h2>Innovated production of<br>
            FORENBOX<br>
        </h2>
        <div style="margin-left:-5%">
            <img id="production1" src=/visitor/images/forenbox/forenbox1.png alt="production1" class="productionProccess productionProccess1" >
            <img id="production2" src=/visitor/images/forenbox/forenbox2.png alt="production2" class="productionProccess productionProccess2">
            <img id="production3" src=/visitor/images/forenbox/forenbox3.png alt="production3" class="productionProccess productionProccess3">
            <img id="production4" src=/visitor/images/forenbox/forenbox4.png alt="production4" class="productionProccess productionProccess4">
            <ul id="ul3" class="uls">
                <li>Automatic production of FORENBOX</li>
                <li>Assembly inside the fruit packaging houses</li>
            </ul>
            <ul id="ul4" class="uls">
                <li>90% less transport cost of empty crates</li>
                <li>90% less space for warehouses</li>
            </ul>
        </div>
    </div>
    <img alt="hr" src=/visitor/images/general/megaligrammi.png class="bigLine prodSmallLine">
    <!-- /THIRD SECTION -->

    <!--******************************************************************************************************************************-->

    <!-- FOURTH SECTION -->
    <div id="fourth-section">
        <h2>Innovated secure stacking<br>
            and ventilation of goods
        </h2>
        <img src=/visitor/images/forenbox/ventilation.jpg alt="ventilation" class="ventilation">
        <ul id="ul5" class="uls">
            <li>Easy and secure stacking of crates</li>
            <li>Perfect ventilation of the goods</li>
            <li>No humidity absorption</li>
        </ul>
        <img alt="hr" src=/visitor/images/general/megaligrammi.png class="bigLine" style="margin-top:6%">
    </div>
    <!-- /FOURTH SECTION -->

    <!--******************************************************************************************************************************-->

    <!-- FIFTH SECTION -->
    <div id="fifth-section">
        <h2>Perfect conservation<br>
        </h2>
        <img src=/visitor/images/forenbox/strawberies.jpg alt="strawberies" class="strawberies">
        <ul id="ul6" class="uls">
            <li>Perfect conservation of the sensitive products<br>&nbsp;&nbsp;
                such as strawberries, cherries, vegetables,<br>&nbsp;&nbsp;
                mushrooms, cheese etc</li>

            <li>Excellent printing due to the high quality<br>&nbsp;&nbsp;
                plywood or carton material
            </li>
        </ul>
        <img alt="hr" src=/visitor/images/general/megaligrammi.png class="bigLine" style="margin-top:6%">
    </div>
    <!-- /FIFTH SECTION -->

    <!-- SIXTH SECTION -->
    <div id="sixth-section">
        <h1 style="padding:6%;">Visit our Gallery <a href="{{ route('gallery') }}" class="blueLink">here</a></h1>
        <img alt="hr" src=/visitor/images/general/megaligrammi.png class="bigLine" >
    </div>
    <!-- /SIXTH SECTION -->


    <!--******************************************************************************************************************************-->

    <!-- SEVENTH SECTION -->
    <div id="seventh-section">
        <h1 style="padding:6%;">3D Model</h1>
        <img alt="animated 3d model" src=/visitor/images/forenbox/animated_3d_model.gif class="animated3dModel">
        <h3>Create your own FORENBOX<br>
            <a href="{{ route('3dmodel') }}" id="uu" class=blueLink  style="padding:7px; padding-bottom:0;">Here</a>
        </h3>
    </div>

    <!-- /SEVENTH SECTION -->

@endsection

@section('scripts')
    {{ Html::script('visitor/sliderengine/amazingslider.js') }}
    {{ Html::style('visitor/sliderengine/amazingslider-1.css') }}
    {{ Html::script('visitor/sliderengine/initslider-1.js') }}
    <script>
        setInterval(function(){
            $('h1').css("font-size", window.innerWidth*0.035);
            $('h2').css("font-size", window.innerWidth*0.02);
            $('h3').css("font-size", window.innerWidth*0.016);
            $('h4').css("font-size", window.innerWidth*0.018);
            $('.uls').css("font-size", window.innerWidth*0.013);
            $('.uls li:before').css("font-size", window.innerWidth*0.015);
        },1);
        function setBoxesVisible(box, time){
            setTimeout(function(){$(box).css({"visibility" : "visible", "opacity" : 1});}, time);
        }
        $(window).scroll(function(event){
            var a = $('#production1').offset().top- window.innerHeight/2;
            if($(document).scrollTop() > a) {
                setBoxesVisible('#production1', 0);
                setBoxesVisible('#production2', 1400);
                setBoxesVisible('#production3', 2800);
                setBoxesVisible('#production4', 4200);
                //event.preventDefault();
            }
        });
        setTimeout(function(){
            var body = document.body,
                html = document.documentElement;
            var height = Math.max( body.scrollHeight, body.offsetHeight,
                html.clientHeight, html.scrollHeight, html.offsetHeight );
            $('#amazingslider-wrapper-1').click(function(event){
                if(event.clientY<height/12 && event.clientX >window.innerWidth/18 && event.clientX < window.innerWidth/1.13)
                    $('html, body').animate({scrollTop : $('#first-section').offset().top - window.innerHeight/2.1},800);
            });
        },2000);

    </script>
@endsection



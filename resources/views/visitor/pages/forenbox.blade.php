@extends('visitor.main')

@section('title', '| Homepage')
@section('stylesheets')
    {!! Html::style('visitor/css/home.css') !!}
@endsection
@section('content')
    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:100%;margin:0 auto; overflow-x:hidden; overflow-y:hidden; margin-top:5%">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto; margin-left:-0.5%;">
            <ul class="amazingslider-slides" style="display:none;">
                <li><a href="#" id="sforenbox_logo"><img  src="/visitor/images/slideshow/forenbox_logo.jpg" alt="sforenbox_logo" title="ForenBox Logo"/></a></li>
                <li><a href="#" id="sstrawberies"><img src="/visitor/images/slideshow/strawberies.jpg" alt="sstrawberies" title="The ForenBox" /></a></li>
                <li><a href="#" id="sforenboxes"><img src="/visitor/images/slideshow/forenboxes.jpg" alt="sforenboxes" title="ForenBoxes" /></a></li>
                <li><a href="#" id="sforenbox_production"><img src="/visitor/images/slideshow/forenbox_production.jpg" alt="sforenbox_production" title="Production" /></a></li>
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
@endsection

@section('scripts')
    {{ Html::script('visitor/sliderengine/amazingslider.js') }}
    {{ Html::style('visitor/sliderengine/amazingslider-1.css') }}
    {{ Html::script('visitor/sliderengine/initslider-1.js') }}
    <script>
        setInterval(function(){
            $('h4').css("font-size", window.innerWidth*0.018);
            $('p').css("font-size", window.innerWidth*0.015);
            $('h1').css("font-size", window.innerWidth*0.035);
        },1);
    </script>
@endsection



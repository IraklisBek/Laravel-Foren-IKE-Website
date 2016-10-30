@extends('visitor.main')

@section('title', '| Homepage')
@section('stylesheets')
    {!! Html::style('visitor/css/home.css') !!}
@endsection
@section('content')
    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:100%;margin:0 auto; overflow-x:hidden; overflow-y:hidden; margin-top:5%">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto; margin-left:-0.5%;">
            <ul class="amazingslider-slides" style="display:none;" id="amazingslider-slides">
                <li><a href="{{ route('forenbox') }}"><img src="/visitor/images/slideshow/forenboxes.jpg" alt="forenboxes" title="ForenBoxes" id="wows0_0"/></a></li>
                <li><a href="{{ route('forenbox') }}"><img src="/visitor/images/slideshow/forenbox_production.jpg" alt="forenbox_production" title="Production" id="wows0_1"/></a></li>
                <li><a href="{{ route('products') }}"><img src="/visitor/images/slideshow/Automatic_press_machine.jpg" alt="Automatic press machine" title="Automatic press machine" id="wows0_2"/></a></li>
                <li><a href="{{ route('products') }}"><img src="/visitor/images/slideshow/Automatic_machine_for_the_vision_control.jpg" alt="LaCarbonara" title="Automatic machine for the vision control" id="wows0_3"/></a></li>
                <li><a href="{{ route('forenbox') }}"><img src="/visitor/images/slideshow/LaCarbonera.jpg" alt="LaCarbonara" title="LaCarbonara" id="wows0_3"/></a></li>            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;" id="amazingslider-thumbnails">
                <li><img src="/visitor/images/slideshow/thumbnails/forenboxes-tn.jpg" alt="forenboxes" title="forenboxes" /></li>
                <li><img src="/visitor/images/slideshow/thumbnails/forenbox_production-tn.jpg" alt="forenbox_production" title="forenbox_production" /></li>
                <li><img src="/visitor/images/slideshow/thumbnails/Automatic_press_machine-tn.jpg" alt="Automatic_press_machine" title="Automatic_press_machine" /></li>
                <li><img src="/visitor/images/slideshow/thumbnails/Automatic_machine_for_the_vision_control-tn.jpg" alt="Automatic_machine_for_the_vision_control" title="Automatic_machine_for_the_vision_control" /></li>
                <li><img src="/visitor/images/slideshow/thumbnails/LaCarbonera-tn.jpg" alt="LaCarbonera" title="LaCarbonera" /></li>
            </ul>
            <div class="amazingslider-engine" id="amazingslider-engine"><a href="http://amazingslider.com" title="JavaScript Image Slideshow">JavaScript Image Slideshow</a></div>
        </div>
    </div>
    <div style="width:100%; box-shadow:0 -5px 5px -5px rgb(29, 91, 104); margin-top:3%;">
        <span style="visibility:hidden">a</span>
    </div>
    <div class="row">
        <a href="{{ route('products') }}">
            <img alt="" src=/visitor/images/home/products.png  class="homeImgs homeImgs1" id="forHomeMainHeight">
        </a>
        <a href="{{ route('forenbox') }}">
            <img alt="" src=/visitor/images/home/forenbox.png class="homeImgs homeImgs2_3">
        </a>
        <a href="{{ route('about') }}">
            <img alt="" src=/visitor/images/home/aboutus.png class="homeImgs homeImgs2_3 homeImgs3">
        </a>
    </div>

    <div class="row">
        <div class="homeTexts homeTexts1">
            <h4>PRODUCTS</h4>
            <p>High-tech solutions for innovative packaging.<br>
                <a href="{{ route('products') }}" >Learn more</a><br></p>
        </div>
        <div class="homeTexts homeTexts2_3">
            <h4>FORENBOX</h4>
            <p>An innovative folded crate for fruit, vegetable, food, industrial use etc.<br>
                <a href="{{ route('forenbox') }}" >Learn more</a><br></p>
        </div>
        <div class="homeTexts homeTexts3">
            <h4>ABOUT US</h4>
            <p>Our company’s profile and useful information.<br>
                <a href="{{ route('about') }}" >Learn more</a><br></p>
        </div>
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



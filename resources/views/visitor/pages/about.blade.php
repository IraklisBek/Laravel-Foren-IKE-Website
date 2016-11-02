@extends('visitor.main')

@section('title', '| About Foren')

@section('stylesheets')
    {!! Html::style('visitor/css/aboutus.css') !!}
@endsection

@section('content')
    <div class="about">
        <img alt="foren logo" src=visitor/images/general/logo.jpg class="logo" >
        <p id="aboutBody">
            <span style="font-weight:bold">“FOREN IKE” </span>founded in 2013.<br>

            &nbsp;&nbsp;&nbsp;Our main activity consists of actions to innovate and evaluate the technology of folding packaging using
            materials as the foldable plywood, carton and plastics.<br>
            &nbsp;&nbsp;&nbsp;&nbsp;We combine the best features of each material, in order to produce new packaging solutions that  adds  value on the goods.<br>
            &nbsp;&nbsp;&nbsp;&nbsp;All our products  have  been designed by our
            company,  a team of young and dynamic professionals.
            Furthermore,  most of our designs are protected by
            patents.<br>
            &nbsp;&nbsp;&nbsp;We are dedicated to customer service and to the evaluation of new technological solutions that meet all the needs.
        </p>
    </div>
    <img alt="hr" src=visitor/images/general/megaligrammi.png class=bigLine>
    <p style="font-family; text-align :center; width:100%" id="download"><span >Κατεβάστε <a class=blueLink style=" padding:7px; padding-bottom:0; ">εδώ</a>
</span></p>

@endsection

@section('scripts')
<script type=text/javascript>
    setInterval(function(){
        $('#aboutBody, #download').css("font-size", window.innerWidth*0.015);
    },1);
</script>
@endsection

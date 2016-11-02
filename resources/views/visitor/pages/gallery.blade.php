@extends('visitor.main')

@section('title', '| Gallery')
@section('stylesheets')
    {!! Html::style('visitor/css/gallery.css') !!}
    {!! Html::style('visitor/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}
@endsection
@section('content')
    <div id="main" style="margin-top:10%;">
        <div class="row">
            @foreach($galleries as $gallery)
            <div class="portfolio-item col-md-3 col-sm-6">
                <div class="portfolio-thumb">
                    <img src="visitor/images/gallery/{{ $gallery->photo }}" alt="">
                    <div class="portfolio-overlay">
                        <a href="visitor/images/gallery/{{ $gallery->photo }}" data-rel="lightbox" class="expand">
                            <h2>View</h2>
                        </a>
                    </div> <!-- /.portfolio-overlay -->
                </div> <!-- /.portfolio-thumb -->
            </div> <!-- /.portfolio-item -->
            @endforeach
        </div> <!-- /.row -->
    </div>
@endsection

@section('scripts')
    {{ Html::script('visitor/js/bootstrap.js') }}
    {!! Html::script('visitor/js/lightBox.js') !!}
    <script>$('[data-rel="lightbox"]').lightbox();</script>
@endsection



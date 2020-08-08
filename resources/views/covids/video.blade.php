@extends('covids.covid')

@section('content-covid')
<div class="col-lg-8 mb-5 mb-lg-0">
    <div class="trending-bottom">
        <div class="row">
            @foreach ($data as $video)          
            <div class="col-lg-4">
                <div class="single-bottom mb-35">
                    <div class="trend-bottom-img mb-30">
                        <div class="embed-responsive embed-responsive-16by9">

                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{trim($video->link, 'https://www.youtube.com/watch?v=')}}" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="trend-bottom-cap">
                        <span class="color1">{{$video->judul}}</span>
                    </div>
                </div>  
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
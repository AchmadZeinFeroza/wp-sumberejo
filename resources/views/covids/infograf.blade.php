@extends('covids.covid')

@section('content-covid')
<div class="col-lg-8 mb-5 mb-lg-0">
    <div class="trending-bottom">
        <div class="row">

            @foreach ($data as $infograf)
            <div class="col-lg-4 ">
                <div class="single-bottom mb-35">
                    <div class="trend-bottom-img mb-30">
                        <a data-toggle="modal" data-target="#image{{$infograf->id_infografik}}"><img
                                src="{{asset('foto/infografik')}}/{{$infograf->foto}}" alt="" style="max-height:300px;text-align:center;overflow:hidden;padding:0;"></a>
                    </div>
                    <div class="trend-bottom-cap">
                        <span class="color1">{{ $infograf->judul }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{-- Modal  --}}
@foreach ($data as $item)
<div class="row">
    <div class="col-lg-4 col-md-12 mb-4">
        <div class="modal fade" id="image{{$item->id_infografik}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <img src="{{asset('foto/infografik')}}/{{$infograf->foto}}" alt="" class="img-fluid">
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn-custom btn-md ml-4"
                        data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach

@endsection
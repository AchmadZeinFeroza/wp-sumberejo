@extends('covids.covid')

@section('content-covid')
<div class="col-lg-8 mb-5 mb-lg-0">
   <div class="blog_left_sidebar">
       @foreach ($data as $artikel)
       <article class="blog_item">
           <div class="blog_item_img">
               <img class="card-img rounded-0" src="{{asset('foto/artikel')}}/{{$artikel->foto}}" alt="">
               <a href="{{url('covid/artikel/detail' , $artikel->id_artikel)}}" class="blog_item_date">
                   <p>Detail</p>
               </a>
           </div>

           <div class="blog_details">
               <a class="d-inline-block" href="{{url('covid/artikel/detail' , $artikel->id_artikel)}}">
                   <h2>{{$artikel->judul}}</h2>
               </a>
               <p>{{ Illuminate\Support\Str::limit($artikel->deskripsi, $limit = 120, $end = '...') }}</p>
           </div>
       </article>
       @endforeach
   </div>
</div>
@endsection
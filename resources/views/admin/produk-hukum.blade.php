@extends('layouts-admin.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Produk Hukum
                <div class="page-title-subheading">Desa Sumberejo
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div id="app">
            @include('layouts-admin.flash')
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="search-wrapper mb-3">
                    <div class="input-holder">
                        <input type="text" class="search-input" placeholder="Type to search">
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close"></button>
                </div>
                <ul class="list-group">
                    <div class="table-wrapper-scroll-y " id="content">
                        @foreach ($files as $berkas)
                        <li class="list-group-item mb-2 pt-4">
                            <div class="btn-group col-md-12 text-right" role="group">
                            <h5 class="list-group-item-heading col-md-2 p-0">{{$berkas->getFileName()}}</h5>
                            <p class="list-group-item-text col-md-1 ">{{$berkas->getSize() / 1000}} Kb</p>
                            <div class="offset-md-7 ">
                                <div class="form-inline">
                                    <a href="{{basename($berkas->getPath()).'/'.$berkas->getFileName()}}" class="btn btn-sm btn-primary mr-1" download> Download </a>
                                    <form action="{{ route('delete.hukum' , $berkas->getFileName())}}" method="POST" class="p-0 m-0">
                                        {{csrf_field()}}{{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </li>
                        @endforeach
                    </div>
                </ul>
                <div class="d-flex justify-content-start">
                    <button type="button" class="btn btn-sm btn-success mt-3 " data-toggle="modal" data-target="#exampleModal">
                        Tambah
                    </button>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@foreach ($files as $berkas)
<div class="modal fade" id="{{$berkas->getFileName()}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus Produk Hukum ini ?
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>
@endforeach 

<div  class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Berkas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('tambah.hukum')}}"  method="POST"  enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <label for="foto"
                    class="col-sm-2 col-form-label">File</label>
                     <div class="col-sm-10"><input name="file" id="foto" type="file"
                        class="form-control-file"">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

@section('script')
<script>
    $(document).ready(function(){
      $(".search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#content li").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script>
@endsection

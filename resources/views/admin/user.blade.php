@extends('layouts-admin.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Artikel COVID 19
                <div class="page-title-subheading">Desa Sumberejo
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="offset-md-3 col-md-6">
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
        <div class="mb-3 card">
            <div class="card-body p-5">
                @foreach ($data as $item)
                <form action="{{ route('update.user' , $item->id)}}"
                    method="post" enctype="multipart/form-data">
                    {{csrf_field()}}{{method_field('PATCH')}}
                    <div class="position-relative row form-group"><label for="username"
                            class="col-sm-4 col-form-label">Username</label>
                        <div class="col-sm-8"><input required name="username" id="username"
                                placeholder="Masukkan Username" type="text"
                                class="form-control" value="{{ $item->username }}"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="password"
                            class="col-sm-4 col-form-label">Passwrod Baru</label>
                        <div class="col-sm-8"><input name="password" id="password"
                                placeholder="Masukkan Password Baru" type="password"
                                class="form-control" ><small class="font-italic">Optional Jika Ingin Ganti Password</small></div>
                    </div>
                    <div class="position-relative row form-group"><label for="password"
                            class="col-sm-4 col-form-label">Konfirmasi Passwrod</label>
                        <div class="col-sm-8"><input name="password_confirmation"
                                placeholder="Masukkan Password Baru" type="password"
                                class="form-control"  id="confirm_password">
                                <small id="message"></small></div>
                                
                    </div>
                    <br>
                    <div class="position-relative row btn-group form-inline offset-md-4 col-md-4">
                        <div class="col-sm-10 offset-sm-2 col-md-2 form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                </form>
                                    
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('#password ,#confirm_password').on('keyup', function () {
        var value = $('#password').val();
      if ( value.length <= 8) {
        $('#message').html('Minimal 8 Karakter').css('color', 'red');
      }else if( $('#password').val() === $('#confirm_password').val()){
        $('#message').html('Sudah Cocok').css('color', 'green');
        console.log($('#password').val());
      }else 
        $('#message').html('Belum Cocok').css('color', 'red');
        console.log($('#password').val());
        console.log($('#confirm_password').val());
    });
     </script>
@endsection

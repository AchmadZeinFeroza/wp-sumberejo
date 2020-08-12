@extends('layouts-admin.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Profil Desa
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
        <div class="mb-3 card">
            <div class="card-body">
                <ul class="tabs-animated-shadow nav-justified tabs-animated nav">
                    <li class="nav-item">
                        <a role="tab" class="nav-link active" id="tab-c1-0" data-toggle="tab" href="#tab-animated1-0">
                            <span class="nav-text">Profil</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-c1-1" data-toggle="tab" href="#tab-animated1-1">
                            <span class="nav-text">Visi dan Misi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-c1-2" data-toggle="tab" href="#tab-animated1-2">
                            <span class="nav-text">Kontak</span>
                        </a>
                    </li>
                </ul>
                @foreach ($data as $item)
                <form action="{{route('update.profil' , $item->id_profil)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}{{method_field('PATCH')}}         
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-animated1-0" role="tabpanel">
                        <br>
                        <div class="card-body">   
                                <div class="position-relative row form-group"><label for="foto"
                                        class="col-sm-2 col-form-label">Foto Sejarah</label>
                                    <div class="col-sm-10"><input name="foto" id="foto" type="file"
                                            class="form-control-file">
                                            @if($item->foto != null)
                                            <img src="{{asset('foto/profil')}}/{{$item->foto}}"
                                                            class="img-thumbnail">
                                            @endif
                                    </div>
                                </div>
                                <div class="position-relative row form-group"><label for="struktur"
                                        class="col-sm-2 col-form-label">Foto Struktur</label>
                                    <div class="col-sm-10"><input name="struktur" id="struktur" type="file"
                                            class="form-control-file">
                                            @if($item->struktur != null)
                                            <img src="{{asset('foto/profil')}}/{{$item->struktur}}"
                                                            class="img-thumbnail">
                                            @endif
                                    </div>
                                </div>
                                <div class="position-relative row form-group"><label for="deskripsi"
                                    class="col-sm-2 col-form-label">Deskripsi Sejarah</label>
                                <div class="col-sm-10"><textarea name="deskripsi" id="deskripsi"
                                        class="form-control">{{ $item->deskripsi }}</textarea></div>
                                </div>
                                <div class="position-relative row form-group"><label for="penduduk"
                                    class="col-sm-2 col-form-label">Penduduk</label>
                                <div class="col-sm-10"><input name="penduduk" id="penduduk"
                                        placeholder="Masukkan Jumlah penduduk" type="text"
                                        class="form-control" value="{{ $item->penduduk }}"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="luas"
                                    class="col-sm-2 col-form-label">Luas</label>
                                <div class="col-sm-10"><input name="luas" id="luas"
                                        placeholder="Masukkan luas Wilayah" type="text"
                                        class="form-control" value="{{ $item->luas }}"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="dusun"
                                    class="col-sm-2 col-form-label">Dusun</label>
                                <div class="col-sm-10"><input name="dusun" id="dusun"
                                        placeholder="Masukkan Jumlah Dusun" type="text"
                                        class="form-control" value="{{ $item->dusun }}"></div>
                                </div>
                                <br>
                                <div class="col-sm-10">
                                    <button class="btn btn-secondary" type="submit">Simpan</button>
                                </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-animated1-1" role="tabpanel">
                        <div class="card-body">     
                                <div class="position-relative row form-group"><label for="visi"
                                    class="col-sm-2 col-form-label">Visi Desa</label>
                                <div class="col-sm-10"><textarea name="visi" id="visi"
                                    class="form-control"> {{ $item->visi }} </textarea></div>
                                </div>
                                <div class="position-relative row form-group"><label for="misi"
                                    class="col-sm-2 col-form-label">Misi Desa</label>
                                <div class="col-sm-10"><textarea name="misi" id="misi"
                                        class="form-control">{{ $item->misi }} </textarea></div>
                                </div>
                                <br>
                                <div class="col-sm-10">
                                    <button class="btn btn-secondary" type="submit">Simpan</button>
                                </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-animated1-2" role="tabpanel">
                        <div class="card-body">   
                                <div class="position-relative row form-group"><label for="facebook"
                                    class="col-sm-2 col-form-label">Facebook</label>
                                <div class="col-sm-10"><input name="facebook" id="facebook"
                                        placeholder="Masukkan Url Facebook" type="text"
                                        class="form-control" value="{{ $item->facebook }}"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="instagram"
                                    class="col-sm-2 col-form-label">instagram</label>
                                <div class="col-sm-10"><input name="instagram" id="instagram"
                                        placeholder="Masukkan Url instagram" type="text"
                                        class="form-control" value="{{ $item->instagram }}"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="youtube"
                                    class="col-sm-2 col-form-label">youtube</label>
                                <div class="col-sm-10"><input name="youtube" id="youtube"
                                        placeholder="Masukkan Url youtube" type="text"
                                        class="form-control" value="{{ $item->youtube }}"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="telpon"
                                    class="col-sm-2 col-form-label">telpon</label>
                                <div class="col-sm-10"><input name="telpon" id="telpon"
                                        placeholder="Masukkan Url telpon" type="text"
                                        class="form-control" value="{{ $item->telpon }}"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="gmail"
                                    class="col-sm-2 col-form-label">gmail</label>
                                <div class="col-sm-10"><input name="gmail" id="gmail"
                                        placeholder="Masukkan Url gmail" type="text"
                                        class="form-control" value="{{ $item->gmail }}"></div>
                                </div>
                                <br>
                                <div class="col-sm-10">
                                    <button class="btn btn-secondary" type="submit">Simpan</button>
                                </div>
                        </div>
                    </div>
                </div>   
                </form>                                
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

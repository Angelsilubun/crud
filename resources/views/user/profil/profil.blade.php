@extends("layouts_user.main")
@section('container')
<section id="services" class="services section-bg" style="padding-top: 100px;">
    <div class="container mt-4 mb-4">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @include("user.partials.p_customer")

                <div class="col" style="width: 700px">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title fw-bold"><a href="/user/profil/profil"><i class="bi bi-arrow-left px-2 "></a></i>Update Profile</h5>
                      @if(session()->has('message'))
                        <div class="text-green-600 mb-4">{{ session('message') }}</div>
                    @endif
                      <hr width="100%" color="#c0c0c0">
                        <form method="#" class="row g-3 fw-bold">
                          <div id="liveAlertPlaceholder"></div>
                          @method("put")
                          @csrf
                          <div class=" col text-center">
                            <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 20%;" edit-profile rounded-circle>
                          </div>
                          <div class="col-md-12">
                              <label for="Name" class="form-label">Nama</label>
                              <input type="text" class="form-control input-text" id="Name" placeholder="name" value={{ old ('name', Auth::user()->name ) }} required>
                              @error('record')

                              @enderror
                          </div>
                          <div class="col-md-6">
                              <label for="inputEmail" class="form-label">Email</label>
                              <input type="email" class="form-control" id="inputEmail" value={{ old ('email', Auth::user()->email) }} required>
                          </div>
                          <div class="col-md-6">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control input-text" id="username" placeholder="username" value="{{Auth::user()->name}}">
                          </div>
                          <div class="col-md-12">
                            <label for="inputtgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control input-text" id="inputtgl_lahir" placeholder="Tanggal Lahir" value="{{ old ('tgl_lahir', Auth::user()->tgl_lahir) }}" required>
                          </div>
                          <div class="col-md-12">
                            <label for="inputno_Telp" class="form-label">Nomor Telepon</label>
                            <input type="number" class="form-control input-text" id="inputnoTelp" placeholder="No Telp" value="{{ old ('notelp', Auth::user()->no_telp) }}" required>
                          </div>
                          <div class="col-md-12">
                            <label for="inputkota" class="form-label">Asal Kota</label>
                            <input type="text" class="form-control input-text" id="inputkota" placeholder="Masukkan kota anda" value="{{ old ('kota', Auth::user()->kota_kabupaten) }}" required>
                          </div>
                          <div class="col-md-12">
                            <label for="inputkota" class="form-label">Alamat Lengkap</label>
                            <input type="text" class="form-control input-text" id="inputkota" placeholder="Masukkan kota anda" value="{{ old ('kota', Auth::user()->alamat) }}" required>
                          </div>
                          <div class="col mb-7">
                            <label for="photo" class="col-sm-2 col-form-label">{{ __('Profile Photo') }}</label>
                            <div class="col mb-6">
                                <input id="photo" type="file" class="form-control" name="photo">
                            </div>
                          </div>
                          <button type="button" class="btn btn-outline-success" id="liveAlertBtn">Simpan</button>
                        </form>  
                    </div> 
                  </div>
                </div>
        </div>
      </div>
</section>
@endsection
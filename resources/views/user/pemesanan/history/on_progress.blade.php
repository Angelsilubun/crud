@extends('layouts_user.main')
@section('container') 

<section id="history" class="history section-bg" style="padding-top: 100px;" data-aos-delay="50">
  <div class="container mt-2 mb-2">
    <div class="p-4 container card mb-5" style="width: 98%" > 
  
      <div class="">
        <a href="/user/pemesanan/struk" class="ps-3 "><i class="bi bi-arrow-left btn btn-success col-sm-1" style=" font-size: 20px; color: rgb(255, 255, 255);"></i></a>
          <div class="card-body">
            <nav aria-label="breadcrumb "  class="card-header" style="height: 40px; width:100%">
              <ol class="breadcrumb ">
                  <li class="breadcrumb-item"><a href="#">History</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Your History Service</li>
              </ol>
            </nav>
          </div>
      </div>
    </div>
    <div class="container col-sm-12">
        <ul class="nav nav-tabs">
            <li class="nav-item col-md-6">
              <a class="nav-link text-center active" aria-current="page" href="/user/pemesanan/history/on_progress">On Progress</a>
            </li>
            <li class="nav-item col-md-6">
              <a class="nav-link text-center"  href="/user/pemesanan/history/last_progress">Last Progress</a>
            </li>
        </ul>
        
        <div class="card mb-3 mt-3" style="max-width: 100%;">
          <div class="row g-0">
            <div class="col-md-2 p-4 justify-content-center">
              <img src="{{ asset('assets/img/icon_kendaraan.png') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class=" col-md-10">
              <div class="card-body">
                <div class="row mb-2">
                  <div class="col-md-9">
                    <h5 class="card-title">Rebbeca Howard</h5>
                    <p class="card-text"><small class="text-muted">2 Items | 10 Days</small></p>    
                  </div>
                  <div class="col-md-3">
                    <p class="text-end">25-07-2022</p>
                  </div>   
                </div>
                    <a href="#" class="btn btn-outline-success col-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal1">Selesai</a>
                    <a href="#" class="btn btn-outline-success col-md-3"  data-bs-toggle="modal" data-bs-target="#exampleModal2" >Batalkan Pesanan</a>
              </div>
            </div> 
          </div>
        </div>
            
        <div class="card" style="max-width: 100%;">
          <div class="row g-0">
            <div class="col-md-2 p-4 justify-content-center">
              <img src="{{ asset('assets/img/box.png') }}" class="img-fluid rounded-start" alt="..." style="width: 70%">
            </div>
            <div class="col-md-10 p-6">
              <div class="card-body">
                <div class="row mb-2">
                  <div class="col-md-9">
                    <h5 class="card-title mt-2">Rebbeca Howard</h5>
                    <p class="card-text"><small class="text-muted">2 Items | 10 Days</small></p>
                  </div>
                  <div class="col-md-3">
                    <p class="text-end">25-07-2022</p>
                  </div>
                </div>
                    <button type="button" class="btn btn-outline-secondary col-md-2" disabled>Selesai</button>
                    <button type="button" class="btn btn-outline-secondary col-md-3" disabled>Batalkan pesanan</button>
                    <h6 class="text-end" type="button" ><i class="bi bi-x-circle p-2" style="color: blue"></i>Pending</h6>
              </div>
            </div>
          </div>
        </div>
  
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content mt-3">
              <div class="modal-body">
                <div class="container text-center mt-4" style="font-size:20px">
                  <p> Saya telah memastikan bahwa kendaraan yang dititipkan telah diterima kembali dan tidak ada masalah apapun.</p>
                  <div>
                    <a href="/user/pemesanan/History/On_Progress"><button class="btn btn-outline-success col-md-12 ">Konfirmasi</button></a>      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
          
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content mt-3">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color:#27cd88">Alasan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body"> 
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Isikan alasan Anda ingin mengajukan pembatalan</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                  <a href="/user/pemesanan/History/On_Progress"><button class="btn btn-outline-success col-md-12 ">Lanjutkan</button></a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
@endsection
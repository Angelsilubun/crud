@extends('layouts_vendor.main')
@section('container')
<section class="home-section">

    <div class="main">
        <div class="topbar">
            <!-- Extend Navbar >> bermasalah khusus dashboard -->
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <!-- Search -->
            <div class="search" data-aos="fade-left" data-aos-duration="1000">
                <label>
                    <input type="text" placeholder="Cari Disini">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>

        <div class="cardBox" data-aos="fade-up" data-aos-delay="100">
            <div class="card border-0 ">
                <div class="card-body">
                    <div class="numbers">1.504</div>
                    <div class="cardName">Suka</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="heart"></ion-icon>
                </div>
               
            </div>

            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">1.504</div>
                    <div class="cardName">Kunjungan</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="eye"></ion-icon>
                </div>
            </div>
                <div class="card border-0">
                    <div class="card-body">
                        <div class="" style="color:rgb(255, 185, 93); font-size:20px"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <div class="cardName">Penilaian (4.8/5)</div>
                    </div>
    
                </div>
            <a href="/vendor/keuangan/pemasukan">
                <div class="card border-0">
                    <div class="card-body">
                    <div class="numbers">$28.500.865</div>
                    <div class="cardName">Pendapatan</div>
                    </div>
                    <div class="iconBx card-img-overlay">
                        <ion-icon name="card"></ion-icon>
                    </div>
                 </div>
            </a>
           
            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">12 <span class="badge bg-danger mt-2 mb-2" style="font-size: 10px">New</span></div>
                    <div class="cardName" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Notifikasi</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="notifications" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"></ion-icon>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">20 <span class="badge bg-danger mt-2 mb-2" style="font-size: 10px">New</span></div>
                    <div class="cardName">Pesan</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="chatbox-ellipses" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample2"></ion-icon>
                </div>
            </div>
        </div>

        <!-- Chart -->
        <div class="graphBox">
            <div class="card border-0 w-auto">
                <canvas id="myChart"></canvas>
            </div>
            <div class="card border-0 w-auto">
                <canvas id="earning"></canvas>
            </div>
        </div>

        <!-- data list -->
        <div class="details mt-3">
            <div class="recentOrders w-auto">
                <div class="cardHeader">
                    <h2>Recent Order</h2>
                    <a href="#" >View All</a>
                </div>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <td class="text-center">NAMA</td>
                            <td class="text-center">KATEGORI PENITIPAN</td>
                            <td class="text-center">HARGA</td>
                            <td class="text-start">PEMBAYARAN</td>
                            <td class="text-start">STATUS</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Star Refigerator</td>
                            <td class="text-center">Kendaraan</td>
                            <td class="text-start">IDR 1.436.000</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-danger col-md-12" style="font-size: 13px ">Return</span></td>
                        </tr>
                        <tr>
                            <td>iPhone 13 pro</td>
                            <td class="text-center">Barang</td>
                            <td class="text-start">IDR 21.783.999</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-success col-md-12" style="font-size: 13px ">Delivered</span></td>
                        </tr>
                        <tr>
                            <td>Quick Traktor</td>
                            <td class="text-center">Bangunan</td>
                            <td class="text-start">IDR 7.875.987</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-warning col-md-12" style="font-size: 13px ">Pending</span></td>
                        </tr>
                        <tr>
                            <td>RX King</td>
                            <td class="text-center">Bangunan</td>
                            <td class="text-start">IDR 15.975.574</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-info col-md-12" style="font-size: 12px">In Progress</span></td>
                        </tr>
                        <tr>
                            <td>Yamaha Jupiter</td>
                            <td class="text-center">Kendaraan</td>
                            <td class="text-start">IDR 13.757.452</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-success col-md-12" style="font-size: 13px">Delivered</span></td>
                        </tr>
                        <tr>
                            <td>Star Refigerator</td>
                            <td class="text-center">Bangunan</td>
                            <td class="text-start">IDR 1.436.000</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-danger col-md-12" style="font-size: 13px">Return</span></td>
                        </tr>
                        <tr>
                            <td>iPhone 13 pro</td>
                            <td class="text-center">Barang</td>
                            <td class="text-start">IDR 21.783.999</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-danger col-md-12" style="fnt-size: 13px">Delivered</span></td>
                        </tr>
                        <tr>
                            <td>Quick Traktor</td>
                            <td class="text-center">Kendaraan</td>
                            <td class="text-start">IDR 7.875.987</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-warning col-md-12" style="font-size: 13px">Pending</span></td>
                        </tr>
                        <tr>
                            <td>RX King</td>
                            <td class="text-center">Barang</td>
                            <td class="text-start">IDR 15.975.574</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-info col-md-12" style="font-size: 13px">In Progress</span></td>
                        </tr>
                        <tr>
                            <td>Yamaha Jupiter</td>
                            <td class="text-center">Kendaraan</td>
                            <td class="text-start">IDR 13.757.452</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-success col-md-12" style="font-size: 13px">Delivered</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- New Customer -->
            <div class="recentCustomer">
                <div class="cardHeader">
                    <h2>Recent Customer</h2>
                </div>
                <table>
                    @for ($i = 0; $i < 8; $i++) <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="{{ asset('user.jpg') }}" alt=""></div>
                        </td>
                        <td>
                            <h4>Selena<br><span>Italy</h4>
                        </td>
                        </tr>
                        @endfor
                </table>
            </div>
        </div>
    </div>
    </div>




    <div class="row col-md-12 " style="padding-top: 350px; padding-left:400px">
        <div class="col-md-6">
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
                <div class="card-header row">
                    <div class="col-md-11">
                         <p class="mt-2" style="font-size: 20px">Pesan (20)</p>
                    </div>
                    <div class="col-md-1">
                       <a href="/vendor/dashboard"> <i class="bi bi-x text-end" style="font-size: 2rem"></i></a>
                    </div>
                </div>
        

            <div class="row ">
                <div class=" col-md-12 rounded-top card mt-1 ">
                    <div class="row mt-2">
                            <div class="col-md-2 image">
                                <img src="http://nicesnippets.com/demo/man01.png" class="rounded">
                            </div>
                            <div class="col-md-8">
                                <H6 data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Dila__</H6>
                                <p class="text-muted" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Barang apa saja yang bisa di titipkan?</p>
                                
                            </div>
                            <div class="col-md-2 text-end">
                                <span class="float-right time text-dark">12:10</span><br>
                                <span class="badge bg-danger badge rounded-pill p-1" style="font-size: 15px" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">12</span>
                            
                            </div>
                    </div>
                </div>
            </div>
            
            <div class="row ">
                <div class=" col-md-12 rounded-top card mt-1 ">
                    <div class="row mt-2">
                            <div class="col-md-2 image">
                                <img src="http://nicesnippets.com/demo/man01.png" class="rounded">
                            </div>
                            <div class="col-md-8">
                                <H6 data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Dila__</H6>
                                <p class="text-muted" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Barang apa saja yang bisa di titipkan?</p>
                                
                            </div>
                            <div class="col-md-2 text-end">
                                <span class="float-right time text-dark">12:10</span><br>
                                <span class="badge bg-danger badge rounded-pill p-1" style="font-size: 15px" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">12</span>
                            
                            </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class=" col-md-12 rounded-top card mt-1 ">
                    <div class="row mt-2">
                            <div class="col-md-2 image">
                                <img src="http://nicesnippets.com/demo/man01.png" class="rounded">
                            </div>
                            <div class="col-md-8">
                                <H6 data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Dila__</H6>
                                <p class="text-muted" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Barang apa saja yang bisa di titipkan?</p>
                                
                            </div>
                            <div class="col-md-2 text-end">
                                <span class="float-right time text-dark">12:10</span><br>
                                <span class="badge bg-danger badge rounded-pill p-1" style="font-size: 15px" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">12</span>
                            
                            </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class=" col-md-12 rounded-top card mt-1 ">
                    <div class="row mt-2">
                            <div class="col-md-2 image">
                                <img src="http://nicesnippets.com/demo/man01.png" class="rounded">
                            </div>
                            <div class="col-md-8">
                                <H6 data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Dila__</H6>
                                <p class="text-muted" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Barang apa saja yang bisa di titipkan?</p>
                                
                            </div>
                            <div class="col-md-2 text-end">
                                <span class="float-right time text-dark">12:10</span><br>
                                <span class="badge bg-danger badge rounded-pill p-1" style="font-size: 15px" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">12</span>
                            </div>
                    </div>
                </div>
            </div>
            
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body">
                <div class="col-md-12 chat-header rounded-top p-2">  
                            <img src="http://nicesnippets.com/demo/man01.png" class="rounded">
                        </div>
                        <div class="col-md-7 user-detail pt-2">
                            <h6 class="pt-1">Alex Steve</h6>
                            <i class="fa fa-circle active ml-1" aria-hidden="true"></i>

                        </div>
                        <div class="col-md-3 options text-right pt-2">
                            <i class="fa fa-ellipsis-h mr-1 hide-chat-box"></i>
                            <i class="fa fa-times hide-chat-box"></i>
                            <div class="col-md-1">
                                <a href="/vendor/dashboard"> <i class="bi bi-x text-end" style="font-size: 2rem"></i></a>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="  chat-content p-0 bg-white border border-top-0">
                    <ul class="pl-3 pr-3 pt-1 mb-1">
                        <li class="p-2 mb-1 rounded">
                            <span class="float-right time">12:00</span>
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </li>
                        <li class="p-2 mb-1 rounded">
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        </li>
                        <li class="p-2 mb-1 rounded">
                            <p class="m-0">This is the nice one place in world.</p>
                        </li><hr>
                        <li class="p-2 mb-1 rounded bg-info text-white">
                            <span class="float-right time text-white">12:10</span>
                            <p class="m-0">Good Morning.</p>
                        </li>
                        <li class="p-2 mb-1 rounded">
                            <span class="float-right time">12:00</span>
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </li>
                        <li class="p-2 mb-1 rounded">
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        </li>
                        <li class="p-2 mb-1 rounded">
                            <p class="m-0">This is the nice one place in world.</p>
                        </li><hr>
                        <li class="p-2 mb-1 rounded bg-info text-white">
                            <span class="float-right time text-white">12:10</span>
                            <p class="m-0">Good Morning.</p>
                        </li>
                    </ul> 
        
        
                    <p class="text-center mb-2 sender font-italic">Stephen</p>
                    <div class="msg-box p-2">
                        <div class="row">
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="message ...">
                            </div>
                            <div class="col-md-3 mt-3">
                                <button class="btn btn-success">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
          
        </div>
{{-- collapse notifikasi --}}

<div class="collapse col-sm-4" style="padding-left:10px" id="collapseExample">
    <div class="card card-body">
        <div class="card-header row">
            <div class="col-md-11">
                 <p class="mt-2" style="font-size: 20px">Notifikasi baru </p>
            </div>
            <div class="col-md-1">
                <i class="bi bi-x text-end" style="font-size: 2rem"></i>
            </div>
        </div>


    <div class="row ">
        <div class=" col-md-12 rounded-top card mt-1 ">
            <div class="row mt-2">
                    <div class="col-md-2 image">
                        <img src="http://nicesnippets.com/demo/man01.png" class="rounded">
                    </div>
                    <div class="col-md-8">
                        <H6 data-bs-toggle="collapse" >Ada Pesanan Baru Masukk Lohhh!!</H6>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        
                    </div>
                    <div class="col-md-2 text-end">
                        <span class="float-right time text-dark">12:10</span><br>
                    </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class=" col-md-12 rounded-top card mt-1 ">
            <div class="row mt-2">
                    <div class="col-md-2 image">
                        <img src="http://nicesnippets.com/demo/man01.png" class="rounded">
                    </div>
                    <div class="col-md-8">
                        <H6 data-bs-toggle="collapse" >Ada Pesanan Baru Masukk Lohhh!!</H6>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        
                    </div>
                    <div class="col-md-2 text-end">
                        <span class="float-right time text-dark">12:10</span><br>
                    </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class=" col-md-12 rounded-top card mt-1 ">
            <div class="row mt-2">
                    <div class="col-md-2 image">
                        <img src="http://nicesnippets.com/demo/man01.png" class="rounded">
                    </div>
                    <div class="col-md-8">
                        <H6 data-bs-toggle="collapse" >Ada Pesanan Baru Masukk Lohhh!!</H6>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        
                    </div>
                    <div class="col-md-2 text-end">
                        <span class="float-right time text-dark">12:10</span><br>
                    </div>
            </div>
        </div>
    </div>
    </div>
  </div>
</section>
@endsection
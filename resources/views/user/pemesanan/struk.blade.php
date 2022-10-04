@extends('layouts_user.main')

    <!-- card virtual akun -->
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
    
        <div class="container mt-4 mb-4">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <h3 class="alert-heading"><b>Caution :</b></h3>
                        <p><b>Jangan bagikan bukti pembayaran kepada siapapun.</b></p>
                    </div>
                    <div class="card-body mb-4 text-center">
                        <img src="{{ asset('assets/img/titip.png') }}" alt="titip" width="100px" height="100px">
                        <p class="card-text text-success mb-1" style="font-size: 20px"><b>Titipsini.com</b></p>
                    </div>
                    <div class="mb-3">
                        <div class="card-header bg-white">
                          <div class="jk">
                            <h4 class="text-success"><b>Struk pembayaran</b></h4>
                          </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <p style="margin-left: 40px">ID pembayaran</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p style="margin-right: 70px">13240294234132</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p style="margin-left: 40px">Tanggal bayar</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p style="margin-right: 70px">19 Agustus 2022</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p style="margin-left: 40px">Nama pengirim</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p style="margin-right: 70px">Alvi Nurbaetri</p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-6">
                                    <p style="margin-left: 40px">Transfer dari bank</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p style="margin-right: 70px">BCA</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p style="margin-left: 40px">Ke bank</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p style="margin-right: 70px">Mandiri</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p style="margin-left: 40px">Nama penerima</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p style="margin-right: 70px">Wijaya Kusuma</p>
                                </div>
                            </div>

                            <hr width="100%" color="#c0c0c0">
                            <div class="row">
                                <div class="col-6">
                                    <p style="margin-left: 40px">Jumlah layanan</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p style="margin-right: 70px">2 unit</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p style="margin-left: 40px">Jumlah hari</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p style="margin-right: 70px">3 hari</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p style="margin-left: 40px">Total service</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p style="margin-right: 70px">3 x 2</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p style="margin-left: 40px">Subtotal</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p style="margin-right: 70px">Rp 600.000</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p style="margin-left: 40px">Diskon 15%</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p style="margin-right: 70px">Rp 575.000</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p style="margin-left: 40px">Total price</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p style="margin-right: 70px">Rp 580.000</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p style="margin-left: 40px">Metode pembayaran</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p style="margin-right: 70px">Transfer bank (BCA)</p>
                                </div>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a class="btn btn-outline-success" href="/user/pemesanan/history/on_progress" role="button">Oke</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
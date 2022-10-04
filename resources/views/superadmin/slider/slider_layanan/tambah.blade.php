@extends("layouts_super.main")

@section("content")

<section class="home-section">

    <body>
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="cardHeader-title">
                    <h2>Sub Slider Layanan</h2>
                </div>
            </div>

            <div class="details3">
                <div class="recentOrders3">
                    <div class="cardHeader" >
                        <h4>Sub Slider</h4>
                        <a href="" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModalTambah" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end"><b>Tambah +</b></a>
                    </div>
                    <br>
                    @if (session('berhasil'))
                    <div class="alert alert-success">
                        {{ session('berhasil')}}
                    </div>
                    @endif
                    <table>
                        <thead>
                            <tr class="col-md-12">
                                <td>No.</td>
                                <td class="col-md-3">Gambar</td>
                                <td>Judul</td>
                                <td>Deskripsi</td>
                                <td class="col-md-3 text-center">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 0;
                            @endphp
                            @foreach ($data_slider as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td><img src="{{ url('/storage/'.$data->image)}}" style="width: 120px;"></td>
                                    <td>{{ $data->judul }}</td>
                                    <td>{!! $data->deskripsi !!}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-4 text-end">
                                                <button onclick="editSlider({{ $data->id }})" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalEdit"
                                                    class="btnedit">
                                                    <i class='bx bx-edit'></i>
                                                </button>
                                            </div>
                                            <div class="col-md-4 text-end">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('slider_layanan.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btndelete" type="submit">
                                                        <i class='bx bxs-trash'></i>
                                                    </button>
                                                </form>
                                                {{-- <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalHapus{{ $data->id }}" class="btn btn-danger btn-sm fw-bold px-4">
                                                    <i class='bx bx-trash'></i>
                                                </button> --}}
                                            </div>
                                            <div class="col-md-4 text-end">
                                                <button onclick="detailSlider({{$data->id}})" class="btndetail" data-bs-toggle="modal" data-bs-target="#exampleModalDetail">
                                                    <i class='bx bx-dots-vertical-rounded'></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</section>

<!-- Form Tambah -->
<div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 50%">
        <div class="modal-content">
            <div class="modal-header hader">
                <h3 class="modal-title" id="exampleModalLabel">
                    Tambah Sub Slider Layanan
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/superadmin/slider/slider_layanan')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
                        @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                        value="{{ old('deskripsi') }}" id="tambah" >
                        </textarea>
                        @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image"> Gambar </label>
                        <input type="file" class="form-control  " name="image" id="image">
                    </div>
                </div>
                <div class="modal-footer d-md-block">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <button type="button" class="btn btn-danger btn-sm">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Form Edit -->
<div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 50%">
        <div class="modal-content">
            <div class="modal-header hader">
                <h3 class="modal-title" id="exampleModalLabel">
                    Edit Sub Slider Layanan
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('superadmin/slider/slider_layanan/simpan')}}" method="POST" enctype="multipart/form-data">
                @method("PUT")
                @csrf
                <div class="modal-body" id="modal-content-edit">

                </div>
                <div class="modal-footer d-md-block">
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                    <button type="button" class="btn btn-danger btn-sm">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Detail-->
<div class="modal fade" id="exampleModalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 40%">
        <div class="modal-content">
            <div class="modal-header hader text-center">
                <h3 class="modal-title" id="exampleModalLabel">Detail Sub Slider Layanan</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-content-detail">

            </div>
            <div class="modal-footer d-md-block">
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close">Kembali</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Delete-->
{{-- @foreach ($data_slider as $data)
<div class="modal fade" id="exampleModalHapus{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:35%">
        <div class="modal-content">
            <div class="modal-header hader">
                <h3 class="modal-title" id="exampleModalLabel">
                    Hapus Data
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('superadmin/slider/slider_layanan'.$data->id) }}" method="POST">
                @method("DELETE")
                {{ csrf_field() }}
                <div class="modal-body" id="modal-content-hapus">
                    Apakah Yakin Untuk Menghapus Data Ini?
                </div>

                <div class="modal-footer d-md-block">
                    <button type="submit" class="btn btn-primary btn-sm">Hapus</button>
                    <button type="button" class="btn btn-danger btn-sm">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach --}}

{{-- CK EDITOR --}}
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('tambah');
</script>

@endsection

@section('js')

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script type="text/javascript">
    function editSlider(id) {
        $.ajax({
            url: "{{ url('/superadmin/slider/slider_layanan/edit') }}",
            type: "GET",
            data: {
                id: id
            },
            success: function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        });
    }

    function detailSlider(id)
    {
        $.ajax({
            url: "{{ url('/superadmin/slider/slider_layanan/detail') }}",
            type: "GET",
            data: {
                id:id
            },
            success: function(data) {
                $("#modal-content-detail").html(data);
                return true;
            }
        })
    }
</script>

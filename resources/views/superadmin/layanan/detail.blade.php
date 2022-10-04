<div class="row">
    <div class="col-12">
        <div class="img text-center mb-3">
            <img src="{{ url('/storage/' . $detail->image) }}" style="width: 80px;">
        </div>
    </div>
    <div class="col-12 text-center">
        <h4 class="title">{{$detail->judul}}</h4>
    </div>
    <div class="col-12">
        <p class="description">{!! $detail->deskripsi !!}</p>
    </div>
</div>
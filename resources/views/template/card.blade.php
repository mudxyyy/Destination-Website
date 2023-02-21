<div class="container mt-3">
    <div class="row">
        @foreach ($data as $item )
            <div class="col-3">
                <div class="card border border-dark shadow">
                    <img src="{{ asset($item->image) }}" alt="" class="img-thumbnail">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <a href="{{ route('detail',$item->id) }}" class="btn btn-success d-block">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

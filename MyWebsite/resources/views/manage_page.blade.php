@extends('template')

@section('content')
    <div class="mt-3">
        <a href="{{ route('display_insert_form_view') }}"><button class="btn btn-warning w-100 mb-5">Insert New Product</button></a>
        @if (count($products) < 1)
            <h1 class="text-center border border-danger rounded p-5">There is No Product</h1>
        @else
            <div class="row row-cols-3 gap-4 d-flex justify-content-center respon">
                @foreach ($products as $data)
                <div class="card col p-3 glass-effect" style="width: 20rem;">
                    <img class="card-img-top" src="{{ $data->product_img_url }}" alt="Card image cap" style="width: 100%; height: 50%">
                    <div class="card-body">
                        <div class="desc-product">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="card-title">{{ $data->product_name }} 
                                    <h6 class="bg-warning rounded p-1">Price: {{ $data->product_price }}</h6>
                                </h5>
                            </div>
                            <p class="card-text">{{ $data->product_desc }}</p>
                        </div>
                        <form action="{{ route('add_delete_logic', ['product_id' => $data->product_id]) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger w-100">Delete</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
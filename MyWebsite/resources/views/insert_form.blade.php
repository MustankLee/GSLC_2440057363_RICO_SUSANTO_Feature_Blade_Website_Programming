@extends('template')

@section('content')

    <div class="card mb-4 bg-green text-center">
        <div class="card-body">
        <h3 class="card-title">&#128276;Informations</h3>
        <p class="card-text pt-3">Update feature is not avaialble for now, please wait for the next development of this website.</p>
        </div>
    </div>

    <form action="{{ route('add_insert_logic') }}" method="POST" enctype="multipart/form-data" class="w-100 insert-form d-flex flex-column justify-content-center">
        @csrf
         <div class="glass-effect p-5">
            <h1 class="text-center">&#128640;Insert Product Form</h1>
            
            <div class="py-3"></div>

            <div class="rspnsv-set-up w-100">
                <div class="d-flex flex-column py-3">
                    <label class="py-1"><h5>Product Name</h5></label>
                    <input type="text" class="bg-transparent border-style-form" placeholder="Input product name" name="product_name">
                    @error('product_name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="d-flex flex-column py-3">
                    <label class="py-1"><h5>Product Price</h5></label>
                    <input type="number" class="bg-transparent border-style-form" placeholder="Input product price" name="product_price">
                    @error('product_price')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="rspnsv-set-up w-100">
                <div class="d-flex flex-column py-3">
                    <label class="py-1"><h5>Product Description</h5></label>
                    <input type="text" class="bg-transparent border-style-form" placeholder="Input product description" name="product_desc">
                    @error('product_desc')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="d-flex flex-column py-3">
                    <label class="py-1"><h5>Product Image Url</h5></label>
                    <input type="text" class="bg-transparent border-style-form" placeholder="Input product image url" name="product_url">
                    @error('product_url')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="py-3"></div>

            <div>
                <button type="submit" class="btn w-25 btn-primary p-2">Submit</button>
            </div>            
        </div>
    </form>


@endsection
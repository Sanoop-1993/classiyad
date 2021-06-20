@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
        <h3 class="text-center">Edit Product</h3>


            <div class="row justify-content-center">

                <div class="col-md-10">

                    <div class="card">
                        <div class="card-body">

                            <form class="forms-sample" action="{{route('product.update',[$product->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <div class="form-group">
                                    <label for="name">Edit Product Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="name of category" value="{{$product->name}}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Choose Category</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                        <option value="">Select Subcategory</option>
                                        @foreach (App\Models\Category::all() as $category)
                                            <option value="{{ $category->id }}" {{$product->category_id == $category->id ? 'selected':''}}>{{ $category->name }}</option>Í
                                        @endforeach
                                    </select>
                                    @error('subcategory_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name">Edit Mrp Price</label>
                                    <input type="text" name="mrp_price" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="name of category" value="{{$product->mrp_price}}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name">Edit Selling Price</label>
                                    <input type="text" name="selling_price" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="name of category" value="{{$product->selling_price}}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="image">Edit Product Image</label>
                                    <input type="file" class="form-control @error('feature_image') is-invalid @enderror"
                                        name="feature_image">
                                    @error('feature_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
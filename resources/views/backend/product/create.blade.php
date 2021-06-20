@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">


            <h3 class="text-center p-2">Add Product</h3>
            <div class="row justify-content-center">
                <div class="col-md-10">

                    <div class="card">
                        <div class="card-body">

                            <form class="forms-sample" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">@csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="name of Product" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
    
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="description">Select Category</label>
                                        <select class="form-control" name="category_id">
                                            <option value="">Select Category </option>
                                            @foreach (App\Models\Category::all() as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
            
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Mrp Price</label>
                                        <input type="text" name="mrp_price" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="name of category" required>
                                        @error('mrp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
    
                                            </span>
                                        @enderror
                                    </div>
    
                                    <div class="form-group col-md-6">
                                        <label for="name">Selling Price</label>
                                        <input type="text" name="selling_price" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="name of category" required>
                                        @error('selling_price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
    
                                            </span>
                                        @enderror
                                    </div>
    
                                </div>

                                <div class="form-group">
                                    <label for="name">Feature Image</label>
                                    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="feature_image">
                                    @error('feature_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </span>
                                    @enderror
                                </div>

                               
                                
                                

                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
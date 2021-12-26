@extends('admin/layout')
@section('page_title', 'Manage Product')
@section('product_select', 'active')
@section('container')

<h1 class="mb-5">Manage Product</h1>
<a href="{{url('admin/product')}}">
    <button class="btn btn-success">Back</button>
</a>
<div class="row m-t-30">
    <div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <form action="{{route('product.manage_product_process')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name" class="control-label mb-1">Product Name</label>
                    <input id="name" value="{{$name}}" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                    @error('name')
                    <div class="text-danger">
                     {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    
                    <label for="image" class="control-label mb-1">Product Image</label>
                    <input id="image" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false" 
                    @if($id>0)
                    {{$image_required=""}}
                    @else
                    {{$image_required="required"}}
                    @endif
                    >
                    @error('image')
                    <div class="text-danger">
                     {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="slug" class="control-label mb-1">Product Slug</label>
                    <input id="slug" value="{{$slug}}" name="slug" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                    @error('slug')
                    <div class="text-danger">
                     {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category_id" class="control-label mb-1">Category</label>
                    <select id="category_id" value="{{$category_id}}" name="category_id" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                        <option value="">Select Categories</option>
                        @foreach($category as $cat)
                            @if($category_id == $cat->id)
                                <option selected value="{{$cat->id}}">{{$cat->category_name}}</option>
                            @else
                                <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="text-danger">
                     {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="brand" class="control-label mb-1">Brand</label>
                    <input id="brand" value="{{$brand}}" name="brand" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                    @error('brand')
                    <div class="text-danger">
                     {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="model" class="control-label mb-1">Model</label>
                    <input id="model" value="{{$model}}" name="model" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                    @error('model')
                    <div class="text-danger">
                    {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="short_desc" class="control-label mb-1">Short Description</label>
                    <textarea id="short_desc" name="short_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" required >{{$short_desc}}</textarea>
                    @error('short_desc')
                    <div class="text-danger">
                     {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="desc" class="control-label mb-1">Description</label>
                    <textarea id="desc" name="desc" type="text" class="form-control" aria-required="true" aria-invalid="false" required >{{$desc}}</textarea>
                    @error('desc')
                    <div class="text-danger">
                     {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keywords" class="control-label mb-1">Keywords</label>
                    <textarea id="keywords" name="keywords" type="text" class="form-control" aria-required="true" aria-invalid="false" required >{{$keywords}}</textarea>
                    @error('keywords')
                    <div class="text-danger">
                     {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="technical_specification" class="control-label mb-1">Technical Specification</label>
                    <textarea id="technical_specification" name="technical_specification" type="text" class="form-control" aria-required="true" aria-invalid="false" required >{{$technical_specification}}</textarea>
                    @error('technical_specification')
                    <div class="text-danger">
                     {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="uses" class="control-label mb-1">Uses</label>
                    <textarea id="uses" name="uses" type="text" class="form-control" aria-required="true" aria-invalid="false" required >{{$uses}}</textarea>
                    @error('uses')
                    <div class="text-danger">
                     {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="warranty" class="control-label mb-1">Warranty</label>
                    <textarea id="warranty" name="warranty" type="text" class="form-control" aria-required="true" aria-invalid="false" required >{{$warranty}}</textarea>
                    @error('warranty')
                    <div class="text-danger">
                     {{$message}}
                    </div>
                    @enderror
                </div>
                <div>
                    <button id="product-submit" type="submit" class="btn btn-lg btn-info btn-block">
                        Submit
                    </button>
                </div>
                <input type="hidden" name="id" value="{{$id}}" />
            </form>
        </div>
    </div>
    </div>
</div>
@endsection 
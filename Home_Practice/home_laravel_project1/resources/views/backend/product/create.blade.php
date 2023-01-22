@extends('backend.layouts.app')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">New Product</h3>
            </div><!-- .nk-block-head-content -->

        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->


    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h5 class="nk-block-title">New Product</h5>
            <div class="nk-block-des">
                <p>Add information and add new product.</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="row g-3">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form name="productForm" action="{{url('/products')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label" for="pr_name">Product Name</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="pr_name" value="{{old('pr_name')}}" name="pr_name">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label" for="pr_details">Product Details</label>
                        <div class="form-control-wrap">
                            <textarea name="pr_details" id="pr_details" cols="30" rows="6" class="form-control">{{old('pr_details')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="regular-price">Price</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" id="pr_price" name="pr_price" value="{{old('pr_price')}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="pr_stock">Stock</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" id="pr_stock" name="pr_stock" value="{{old('pr_stock')}}">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label" for="category">Category</label>
                        <div class="form-control-wrap">
                            <select name="pr_category" id="pr_category" class="form-control">
                                <option value="">Select one</option>
                                @foreach($cats as $cat)
                                <option {{old('pr_category')== $cat->id? 'selected' : ''}} value="{{$cat->id}}">{{$cat->category_name}}</option>
                                {{-- akane category name holo category fielder name --}}
                                @endforeach
                            </select>


                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <!-- <div class="upload-zone small bg-lighter my-2"> -->
                    <label class="form-label" for="pr_image">Product Image</label>
                    <input type="file" class="form-control" id="pr_image" name="pr_image">
                    <span class="dz-message-text">Drag and drop file</span>
                    </input>
                    <!-- </div> -->
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add New</span></button>
                </div>
            </form>
        </div>
    </div><!-- .nk-block -->

</div>

@endsection
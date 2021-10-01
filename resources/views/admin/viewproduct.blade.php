@extends('layouts.adminmaster')
@section('title','View Product')

@section('content')
    <div class="container">
        <form action="{{url('adminbrand/product/create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-xl-3 col-md-3 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">

                                <label for="">Product Name</label>
                                <input type="text" name="product_name" value="{{old('product_name')}}"
                                       class="form-control" placeholder="product name" required>
                                <small class="text-danger"> {!! $errors->first('product_name') !!}</small>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <label for="">Product Image <span style="font-size: 8px">(400 x 400)</span></label>
                                <input type="file" name="product_image"
                                       class="form-control" required  accept="image/*" >
                                <small class="text-danger"> {!! $errors->first('product_image') !!}</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <label for="">Product Detail </span></label>
                                <input type="text" name="product_detail" value="{{old('product_detail')}}"
                                       class="form-control" required>
                                <small class="text-danger"> {!! $errors->first('product_detail') !!}</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <label for="">Select Brand </label>
                                <select name="brand_id" id="" class="form-control" required>
                                    <option value="{{null}}">~ select brand ~</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger"> {!! $errors->first('brand_id') !!}</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row ml-1">
                <input type="submit" class="btn btn-primary btn-sm" value="Create Brand">
            </div>
        </form>


    </div>

    <div class="container" style="margin-top:50px;">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List of Products</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTableBrand" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Details</th>
                            <th>Brand</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Details</th>
                            <th>Brand</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->product_name}}</td>
                                <td><center>
                                        <img src="{{asset($product->product_image)}}" alt="{{$product->product_name}}"
                                             style="width:100px;height:20px">
                                    </center>
                                </td>
                                <td>
                                    {{substr($product->product_detail,0,100)}}
                                    @if(strlen($product->product_detail) > 100)
                                        ...
                                    @endif
                                </td>
                                <td>
                                    {{$product->Brand->brand_name}}
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="#" data-toggle="modal"
                                       data-target="#brand{{$product->id}}">
                                        <i class="fa fa-edit"></i>
                                    </a>


                                    <!-- Logout Modal-->
                                    <div class="modal fade" id="brand{{$product->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" style="font-size: 12px;"
                                                        id="exampleModalLabel"> Update {{$product->product_name}}</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{url('update/product')}}/{{$product->id}}"
                                                          method="post"
                                                          enctype="multipart/form-data" >
                                                        @csrf
                                                        <div class="card border-left-success shadow h-100 py-2">
                                                            <div class="card-body">
                                                                <div class="row no-gutters align-items-center">


                                                                    <label for="">Product Name</label>
                                                                    <input type="text" name="product_name"
                                                                           value="{{$product->product_name}}"
                                                                           class="form-control" placeholder="product name" required>
                                                                    <small class="text-danger"> {!! $errors->first('product_name') !!}</small>
                                                                    <br>
                                                                    <label for="">Product Image <span
                                                                            style="font-size: 8px">(270 x 367)
                                                                        </span></label>
                                                                    <input type="file" name="product_image"
                                                                           class="form-control"   accept="image/png, image/jpg" >
                                                                    <small class="text-danger"> {!! $errors->first('product_image') !!}</small>
                                                                    <br>
                                                                    <label for="">Product Detail </label>
                                                                    <input type="text" name="product_detail"
                                                                           value="{{$product->product_detail}}"
                                                                           class="form-control" required>
                                                                    <small class="text-danger"> {!! $errors->first('product_detail') !!}</small>

                                                                    <br><br>
                                                                    <label for="">Select Brand </label>
                                                                    <select name="brand_id" id="" class="form-control" required>
                                                                        <option
                                                                            value="{{$product->brand_id}}">{{$product->Brand->brand_name}}</option>
                                                                        @foreach($brands as $brand)
                                                                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <small class="text-danger"> {!! $errors->first('brand_id') !!}</small>
                                                                    <br><br>
                                                                    <input type="submit" class="btn btn-sm
                                                                        btn-primary" value="Update">
                                                                </div>

                                                            </div>
                                                        </div>
                                                </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                </div>
                </td>
                <td>
                    <a href="{{url('/product/delete')}}/{{$product->id}}" onclick="return confirm('Are you sure?')"
                       class="btn btn-sm
                                        btn-danger">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>

                </tr>
                @endforeach

                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>







@stop

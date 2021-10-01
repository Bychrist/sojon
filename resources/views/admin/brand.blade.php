@extends('layouts.adminmaster')
@section('title','view brands')

@section('content')
   <div class="container">
       <form action="{{url('adminbrand/create')}}" method="post" enctype="multipart/form-data">
           @csrf
          <div class="row">

                  <div class="col-xl-4 col-md-4 mb-4">
                      <div class="card border-left-success shadow h-100 py-2">
                          <div class="card-body">
                              <div class="row no-gutters align-items-center">

                                      <label for="">Brand Name</label>
                                      <input type="text" name="brand_name" value="{{old('brand_name')}}"
                                             class="form-control" placeholder="Enter brand_name" required>
                                      <small class="text-danger"> {!! $errors->first('brand_name') !!}</small>

                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4 col-md-4 mb-4">
                      <div class="card border-left-success shadow h-100 py-2">
                          <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                  <label for="">Brand Image <span style="font-size: 8px">(400 x 100)</span></label>
                                  <input type="file" name="brand_image"
                                         class="form-control" required  accept="image/png, image/jpg" >
                                  <small class="text-danger"> {!! $errors->first('brand_image') !!}</small>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4 col-md-4 mb-4">
                      <div class="card border-left-success shadow h-100 py-2">
                          <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                  <label for="">Brand Detail </span></label>
                                  <input type="text" name="brand_detail" value="{{old('brand_detail')}}"
                                         class="form-control" required>
                                  <small class="text-danger"> {!! $errors->first('brand_detail') !!}</small>
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
                <h6 class="m-0 font-weight-bold text-primary">List of Brands</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTableBrand" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Brand Name</th>
                            <th>Brand Image</th>
                            <th>Brand Details</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Brand Name</th>
                            <th>Brand Image</th>
                            <th>Brand Details</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                        </tfoot>
                        <tbody>
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{$brand->brand_name}}</td>
                                    <td><center>
                                            <img src="{{asset($brand->brand_image)}}" alt="{{$brand->brand_name}}"
                                                 style="width:100px;height:20px">
                                        </center></td>
                                    <td>
                                        {{substr($brand->brand_detail,0,100)}}
                                        @if(strlen($brand->brand_detail) > 100)
                                            ...
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="#" data-toggle="modal"
                                           data-target="#brand{{$brand->id}}">
                                            <i class="fa fa-edit"></i>
                                        </a>


                                        <!-- Logout Modal-->
                                        <div class="modal fade" id="brand{{$brand->id}}" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" style="font-size: 12px;"
                                                            id="exampleModalLabel"> Update {{$brand->brand_name}}</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{url('adminbrand/update')}}/{{$brand->id}}"
                                                              method="post"
                                                              enctype="multipart/form-data" >
                                                            @csrf
                                                            <div class="card border-left-success shadow h-100 py-2">
                                                                <div class="card-body">
                                                                    <div class="row no-gutters align-items-center">

                                                                        <label for="">Brand Name</label>
                                                                        <input type="text" name="brand_name"
                                                                               value="{{$brand->brand_name}}"
                                                                               class="form-control" placeholder="Enter brand_name" required>
                                                                        <small class="text-danger"> {!! $errors->first('brand_name') !!}</small>
                                                                        <br>
                                                                        <label for="">Brand Image</label>
                                                                        <input type="file" name="brand_image"
                                                                               accept="image/png, image/jpg"
                                                                               class="form-control"  >
                                                                        <small class="text-danger"> {!!
                                                                        $errors->first('brand_image') !!}</small>
                                                                        <br>
                                                                        <label for="">Brand Detail </span></label>
                                                                        <input type="text" name="brand_detail"
                                                                               value="{{$brand->brand_detail}}"
                                                                               class="form-control" required>
                                                                        <small class="text-danger"> {!! $errors->first('brand_detail') !!}</small>
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
                                        <a href="{{url('/adminbrand/delete')}}/{{$brand->id}}" onclick="return confirm('Are you sure?')" class="btn btn-sm
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

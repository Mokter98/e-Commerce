@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product Form</h3></div>
                    <div class="card-body">

                        <form action="{{ route('update-product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                <input type="hidden" value="{{ $product->id }}" name="product_id">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="name" type="text" value="{{ $product->product_name }}" name="product_name" placeholder="Enter product name" />

                                    </div>
                                </div>

                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control"  type="text" value="{{ $product->category_name }}" name="category_name" placeholder="Category Name" />

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control"  type="text" value="{{ $product->brand_name }}" name="brand_name" placeholder="Brand Name" />

                                    </div>
                                </div>

                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" type="number" value="{{ $product->Price }}" placeholder="Price" name="Price" />

                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="description" value="{{ $product->description }}" cols="30" rows="10"></textarea>

                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" type="file" value="{{ $product->image }}" name="image"/>
                                <img src="{{ asset($product->image) }}" style="width: 80px; height: 80px;">
                            </div>


                            {{--                            <div class="row mb-3">--}}
                            {{--                                <div class="col-md-6">--}}
                            {{--                                    <div class="form-floating mb-3 mb-md-0">--}}
                            {{--                                        <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" />--}}
                            {{--                                        <label for="inputPassword">Password</label>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-md-6">--}}
                            {{--                                    <div class="form-floating mb-3 mb-md-0">--}}
                            {{--                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />--}}
                            {{--                                        <label for="inputPasswordConfirm">Confirm Password</label>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" class="form-control btn btn-success" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


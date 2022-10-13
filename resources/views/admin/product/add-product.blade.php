@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product Form</h3></div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="product_name" placeholder="Enter product name" />
                                        <label for="inputFirstName">product name</label>
                                    </div>
                                </div>

                            </div>

                          <div class="row mb-3">
                                 <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="text" name="category_name" placeholder="Category Name" />
                                        <label for="inputEmail">Category Name</label>
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-floating mb-3">
                                         <input class="form-control" id="inputEmail" type="text" name="brand_name" placeholder="Brand Name" />
                                         <label for="inputEmail">Brand Name</label>
                                      </div>
                                  </div>

                          </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text"  placeholder="Price" />
                                <label for="inputEmail">Price</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                <label for="inputEmail">Description</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="file" name="image"/>
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
                                <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Create Account</a></div>
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

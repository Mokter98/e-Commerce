@extends('admin.master')
@section('content')
    <main>
        <div class="container-fluid px-4 pt-5">
            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    <tbody>
                    @php $i=1; @endphp;
                    @foreach($products as $product)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->category_name }}</td>
                        <td>{{ $product->brand_name }}</td>
                        <td>{{ $product->Price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->status==1?'published':'unpublished' }}</td>
                        <td><img style="width: 80px; height: 80px" src="{{asset($product->image)}}" alt=""></td>
                        <td>
                            @if($product->status==1)
                                <a href="{{ route('status',['id'=>$product->id]) }}" class="btn btn-warning">Unpublished</a>
                            @else
                                <a href="{{ route('status',['id'=>$product->id]) }}" class="btn btn-primary">Published</a>
                            @endif
                                <a href="{{ route('edit',['id'=>$product->id]) }}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

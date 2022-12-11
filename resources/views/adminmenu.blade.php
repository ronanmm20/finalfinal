
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                                <table class="table-auto divide-y divide-gray-200">
                                    <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>price</th>
                                        <th>code</th>
                                        <th>picture</th>
                                        <th>producer</th>
                                        <th>specifications</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <a href="{{ route("createproduct") }}" class="btn btn-outline-primary">New product</a>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td>${{ $product->price }}</td>
                                            <td>{{ $product->code }}</td>
                                            <td>{{ $product->image }}</td>
                                            <td>{{ $product->brand }}</td>
                                            <td><div class="inline-flex rounded-md shadow-sm" role="group">
                                                    <button type="button" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200">
                                                        <a href="{{route('editproduct', ['products' => $product->id])}}">Edit</a>
                                                    </button>
                                                    <button type="button" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 ">
                                                        <a href="{{route('deleteproduct', ['products' => $product->id])}}">Delete</a>

                                                    </button>
                                                </div></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="grid place-items-center">{{$products->links()}}</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection



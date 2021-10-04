@extends('base')

@section('content')
    <div class="container">
      
        <div class="row mb-4">
        <div class="col-md-4 offset-4">
            <div class="card">
                <div class="card text-dark bg-light mb-2">
                    <h3>Create Item</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('/dashboard/create')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label for="quantity">Quantity</label>
                            <input type="text" name="quantity" id="quantity" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button class="btn  btn-block text-white w-100" style="background-color: #FA897B" type="submit">Add Item</button>
                        </div>
                        <div class="mt-2"><a href="{{ url('/dashboard') }}" class="btn btn-block w-100 text-white" style="background-color: #FA897B">Back</a></div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    </div>

@endsection
@extends('base')

@section('content')
  <div class="container">
          <br><br>
    <div class="mb-1 float-end">
      <a href="{{url('dashboard/create')}}" class="btn btn-light p-3" style="background-color: #FA897B">
        Add Item
      </a>
    </div> 
  
  <h1 class="text-white" style="font-family: Lucida Console, Courier New, monospace; font-size:50px;">LIST OF ITEMS</h1> 
  <table class="table table-sm table-light">
      <thead class="bg-primary text-secondary" style="font-size: 1.2em;">
      <br>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>&nbsp;</th>
      </thead><br>  
      <tbody>
          @foreach($items as $itm)
          <tr>
              <td>{{$itm->name}}</td>
              <td>{{$itm->description}}</td>
              <td>{{$itm->price}}</td>
              <td>{{$itm->quantity}}</td>

              <td class="d-flex justify-content-end" > 
                   <a href="{{ url('dashboard/edit/' . $itm->id) }}" style="width: 7rem; " class="btn btn-success md-7  btn-sm rounded-pill text-wrap">
                      Edit
                  </a>
                  <a href="{{ url('dashboard/delete/' . $itm->id) }}" style="width: 7rem; " class="btn btn-danger md-7  btn-sm  text-wrap rounded-pill" type="submit">
                      Delete
                  </a>
              </td>
          </tr>
  
          @endforeach
      </tbody>
  </table>
  </div> 

@endsection
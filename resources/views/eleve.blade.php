@extends('template.main')
@section('content')
<table class="table container">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Lastname</th>
        <th scope="col">Age</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dataeleve as $item)            
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->name}}</td>
          <td>{{$item->lastname}}</td>
          <td>{{$item->age}}</td>
          
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
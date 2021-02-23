@extends('template.main')
@section('content')
<div class="container mt-5">
    @foreach ($dataform as $item)            
      <th scope="row">{{$item->id}}</th>
      <h1>{{$item->name}}</h1>
      <p>{{$item->description}}</p>
    @endforeach
</div>

@endsection
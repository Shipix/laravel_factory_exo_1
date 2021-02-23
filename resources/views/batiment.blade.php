@extends('template.main')
@section('content')
   @foreach ($databat as $item)
   <div class="container mt-5">
       <h1>{{$item->name}}</h1>
       <p>{{$item->description}}</p>
   </div>
   @endforeach
@endsection
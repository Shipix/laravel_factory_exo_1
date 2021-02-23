@extends('template.main')
@section('content')
<div class="container">
    @foreach ($datatypeform as $item)
    <h3>{{$item->name}}</h3>
    @endforeach
    </div>
@endsection
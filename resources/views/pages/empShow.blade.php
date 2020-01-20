  
@extends('layouts.BASE')

@section('content')
<div class="col-12">
<a href="{{route("emps.index")}}"><i class="fas fa-arrow-circle-left"></i></a>
<h6>Nome Employee:</h6>
</div>
    <div class="col-12">

       <p> [ID {{$emp -> id}}] {{ $emp -> name }} {{ $emp -> lastname }} {{$emp -> birth_year}}</p>
       <p> </p>
    </div>

<div class="col-12">
    <h6> Nome Task Associati : </h6>
</div>
<ul>
  @if($emp -> tasks() -> count() > 0)
    
    @foreach ($emp -> tasks as $task)
      <li>[ID {{$task -> id}}]{{ $task -> name }} {{ $task -> description }}</li>
    @endforeach
  @endif
  @if ($emp -> tasks() -> count() < 1)
      <p>Nessun Task Associato</p>
  @endif
</ul>

@endsection
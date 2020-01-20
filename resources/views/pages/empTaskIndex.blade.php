@extends('layouts.base')

@section('content')

<div class="col-6">
<a href="{{route('emps.index')}}"><h4>Employee : {{$emps -> count()}}</h4></a>


<table>

    <tr>
        <td>[ID]</td>
        <td>[NOME]</td>
        <td>[RELAZIONE IN TAB TASKS]</td>
    </tr>
    @foreach ($emps as $emp)
    <tr>
    <td>{{$emp -> id}}</td>
    <td>{{$emp -> name }} {{$emp -> lastname }}</td>
    <td>{{$emp -> tasks() -> count()}}</td>
    </tr>
    @endforeach
</table>
</div>
<div class="col-6">
    <a href="{{route("tasks.index")}}"><h4>Task : {{$tasks -> count()}}</h4></a>
    <table>

    <tr>
        <td>[ID]</td>
        <td>[NOME]</td>
        <td>[NOME IN TAB EMPLOYEE]</td>
        <td>[ID EMPLOYEE]</td>

    </tr>
    @foreach ($tasks as $task)
    <tr>
        <td>{{$task -> id}}</td>
        <td>{{$task -> name }} {{$task -> lastname }}</td>
        <td>{{$task -> employee -> name}} {{$task -> employee -> lastname}}</td>
        <td>{{$task -> employee_id}}</td>
    </tr>
    @endforeach
</table>

</div>
{{-- <ul>
   @foreach ($tasks as $task)
    <li>[ID task {{$task -> id}}]{{$task -> name}}  : {{$task -> employee -> name }} [ID employee {{$task -> employee_id}}]</li>
    @endforeach
    </ul> --}}
@endsection
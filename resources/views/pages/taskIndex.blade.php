@extends('layouts.base')

@section('content')
<div class="col-12">

    <h4>Task : {{$tasks -> count()}}</h4>
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
            <td>{{$task -> employee -> name}}</td>
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
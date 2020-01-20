@extends('layouts.base')
@section('content')
<div class="col-6">

    <h4>Employee with task</h4>
    
    <table>
        
        <tr>
            <td>[ID]</td>
            <td>[NOME]</td>
            <td>[RELAZIONE IN TAB TASKS]</td>
        </tr>
        @foreach ($emps as $emp)
        @if ($emp -> tasks() -> count() > 0 )
            <tr>
            <td>{{$emp -> id}}</td>
            <td><strong>{{$emp -> name }} {{$emp -> lastname }}</strong></td>
            <td>{{$emp -> tasks() -> count()}}</td>
            <td><a href="{{route("emps.show",$emp -> id)}}"><i class="fas fa-info-circle"></i></a></td>
            </tr>
        @endif
        @endforeach
        </table>
    </div>
    <div class="col-6">

    <h4>Employee without task</h4>
    
    <table>
        
        <tr>
            <td>[ID]</td>
            <td>[NOME]</td>
        </tr>
        @foreach ($emps as $emp)
        @if ($emp -> tasks() -> count() < 1 )
         
            <tr>
            <td>{{$emp -> id}}</td>
            <td> <strong>{{$emp -> name }} {{$emp -> lastname }}</strong></td>
            <td><a href="{{route("emps.show",$emp -> id)}}"><i class="fas fa-info-circle"></i></a></td>
            </tr>
        @endif
        @endforeach
        </table>
    </div>
    @endsection   
{{--     <h4>Employee withOUT task: {{$emps -> count()}}</h4>
    
    <table>
        
        <tr>
            <td>[ID]</td>
            <td>[NOME]</td>
            <td>[RELAZIONE IN TAB TASKS]</td>
        </tr>
        @foreach ($emps as $emp)
        @if ($emp -> tasks() -> count() < 1 )
            <tr>
            <td>{{$emp -> id}}</td>
            <td>{{$emp -> name }} {{$emp -> lastname }}</td>
            <td>{{$emp -> tasks() -> count()}}</td>
            </tr>
        @endif
        </div>
        
        {{-- @if ($emp -> tasks() -> count() < 1 )
            <tr>
            <td>{{$emp -> id}}</td>
            <td>{{$emp -> name }} {{$emp -> lastname }}</td>
            <td>Nessun Task Trovato</td>
            </tr>
        @endif 
        @endforeach
        </table>
     </div> --}}
  


{{-- <ul>

    <li>
        with task : 
        <ul>
            @foreach ($emps as $emp)
                
            @if ($emp -> tasks() -> count() > 0)
            {{$emps -> count()}}
                <li>[ID employee {{$emp -> id}}] : {{$emp -> name}} {{$emp -> lastname}} : {{$emp -> tasks() -> count()}}</li>
                <ul>

                    @foreach ($emp -> tasks as $task)
                    <li>[ID task {{$task -> id}}] : {{$task -> name}}</li>
                    @endforeach
                </ul>
            @endif
            @endforeach
        </ul>
    </li>
</ul>

<ul>

    <li>

        Without task : 
        <ul>
            @foreach ($emps as $emp)
            @if ($emp -> tasks() -> count() < 1)
                <li>{{$emp -> name}} {{$emp -> lastname}} </li>
                <ul>

                    @foreach ($emp -> tasks as $task)
                    <li>{{$task -> name}}</li>
                    @endforeach
                </ul>
            @endif
            @endforeach
        </ul>
    </li>
</ul> --}}

{{-- <ul>
    @foreach ($emps as $emp)
<li>{{$emp-> name}} {{$emp -> lastname}} : {{$emp -> tasks() -> count()}}</li>
    @endforeach


</ul> --}}

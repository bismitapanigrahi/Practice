<x-header />
@if($name == 'Ravi')
    <h1>Hello {{$name}}</h1>
@elseif($name == 'Ram')
    <h1>Hello {{$name}}</h1>
@else
    <h1>Welcome {{$name}}</h1>
@endif
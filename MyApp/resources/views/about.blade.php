<h1>About Page</h1>
<x-header />
<h2>{{10+20}}</h2>
@for($i=0; $i < 10; $i++)
<span>{{$i}}</span>
@endfor
@foreach($users as $user)
    <p>This is {{$user}}.</p>
@endforeach
{{count($users)}}
@include('inner')
@csrf

<script>
    var data = @json($users);
    document.write(data);
</script>
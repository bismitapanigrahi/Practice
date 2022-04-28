<h1>Login Page</h1>
<!-- {{$errors}} -->
<!-- @if($errors->any())
@foreach($errors->all() as $err)
<li> {{$err}} </li>
@endforeach
@endif -->
<form action="userReq" method="POST">
    <!--{{method_field('PUT')}}-->
    @csrf
    <input type="text" name="username" placeholder="Enter Name" value="{{old('username')}}"><br>
    <span style="color: red">@error('username'){{$message}} @enderror</span><br>
    <input type="password" name="password" placeholder="Enter Password"><br>
    <span style="color: red">@error('password'){{$message}} @enderror</span><br>
    <button type="submit">Login</button>
</form>
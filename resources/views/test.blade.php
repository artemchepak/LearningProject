@foreach($users as $user)
    <img src="{{$user['avatar']}}" alt="">
    <h1>{{$user['first_name']}} {{$user['last_name']}}</h1>
    <b>Email:</b> {{$user['email']}}
    <hr>
@endforeach

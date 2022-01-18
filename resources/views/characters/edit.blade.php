@extends('layouts.primary')
@section('content')

    <h1>Edit Character</h1>

    <form method="post">

        <input type='text' name='name' value="{{$character->name}}" />
        <input type='text' name='name' value="{{$character->birthday}}" />


    </form>
@endsection
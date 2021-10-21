@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('athlete.index')}}" class="btn btn-primary">Назад</a>
        <hr>
        <ul>
            <li>Name: {{$athlete->secondname or ''}}</li>
        </ul>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('athlete.index')}}" class="btn btn-primary">Назад</a>
        <hr>
        <ul>
            <li>Тренер: {{$coach->secondname or ''}}</li>
            <li>User name: {{$coach->athlete->secondname or ''}}</li>
        </ul>
    </div>
@endsection

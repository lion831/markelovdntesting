@extends('layouts.app')

@section('content')

    <div class="container">
        <form class="form-horizontal" action="{{route('athlete.update', $athlete) }}" method="post">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}
            <fieldset class="form-horizontal">
                <div class="form-group"><label class="col-sm-2 control-label">Имя:</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" placeholder="" value="{{$athlete->secondname or ''}}">
                    </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Тренер:</label>
                    <div class="col-sm-10">
                        <input type="text" name="name_animal" class="form-control" placeholder="" value="{{$athlete->coach->secondname or ''}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">Сохранить</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

@endsection

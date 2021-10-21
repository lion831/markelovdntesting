@extends('layouts.app')
<br>

{{--@foreach($athletes as $athlete)--}}
{{--<?= $athlete->secondname.'<br>';?>--}}
{{--@endforeach--}}

@section('content')
    <div class="container">
        <a href="{{route('athlete.create')}}" class="btn btn-primary">Создать</a>
        <hr>
        <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
            <thead>
            <tr>
               <th data-toggle="true">Имя</th>
               <th data-hide="phone">Тренер</th>
               <th class="text-right" data-sort-ignore="true">Действие</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($athletes as $athlete)
                <tr>
                    <td>
                        @isset ($athlete->coach)
                            <a href="{{route('coach.show', $athlete->coach)}}">{{ $athlete->coach->secondname or ''}}</a>
                        @endisset
                    </td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('athlete.destroy', $athlete)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <div class="btn-group">
                                <a class="btn btn-primary" href="{{route('athlete.edit', $athlete)}}">Редактировать</a>
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </div>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">
                        <h2 class="ui center aligned icon header" class="center aligned">
                            <i class="circular database icon"></i>
                            Данные отсутствуют
                        </h2>
                    </td>
                </tr>
            @endforelse

            </tbody>
        </table>
    </div>
@endsection

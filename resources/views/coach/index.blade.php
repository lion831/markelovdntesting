@extends('layouts.app')

@foreach($coaches as $coach)
    <?=$coach->secondname.'<br>';?>
@endforeach

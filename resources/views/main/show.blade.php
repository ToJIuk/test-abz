@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-6"></div>
    <h1>{{ $data->full_name }}</h1>
    <p class="lead">{{ $data->position }}, (зарплата - {{$data->salary}} грн) </p>
    <p class="lead">На работе с {{$data->date}}</p>
    <hr>
    <a href="{{ route('main.index') }}" class="btn btn-info">Назад к списку</a>
    <a href="{{ route('main.edit', $data->id) }}" class="btn btn-primary">Редактировать</a>

    {!! Form::open(['method' => 'DELETE','route' => ['main.destroy', $data->id],'style'=>'display:inline']) !!}
    {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    </div>
</div>
@endsection
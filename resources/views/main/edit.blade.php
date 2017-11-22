@extends('layouts.app')

@section('content')


    {!! Form::model($data, [
    'method' => 'PATCH',
    'route' => ['main.update', $data->id]
    ]) !!}
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                {!! Form::label('full_name', 'ФИО:', ['class' => 'control-label']) !!}
                {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
            </div>
        </div></div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                {!! Form::label('position', 'Должность:', ['class' => 'control-label']) !!}
                {!! Form::text('position', null, ['class' => 'form-control']) !!}
            </div>
        </div></div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                {!! Form::label('salary', 'Зарплата (грн):', ['class' => 'control-label']) !!}
                {!! Form::number('salary', null, ['class' => 'form-control']) !!}
            </div>
        </div></div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                {!! Form::label('date', 'Дата зачисления:', ['class' => 'control-label']) !!}
                {!! Form::date('date', null, ['class' => 'form-control']) !!}
            </div>
        </div></div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                {!! Form::label('parent_id', 'Порядковый номер начальника:', ['class' => 'control-label']) !!}
                {!! Form::number('parent_id', null, ['class' => 'form-control']) !!}
            </div></div></div>

    {!! Form::submit('Обновить', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection
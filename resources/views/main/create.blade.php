@extends('layouts.app')

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    {!! Form::open([
    'route' => 'main.store',
    'method'=>'POST'
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

    {!! Form::submit('Добавить нового сотрудника', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection

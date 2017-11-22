@extends('layouts.app')

@section('content')

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">№
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href={{url('list/id')}}>Сортировать по возрастанию</a></li>
                            <li><a href={{url('list/id/desc')}}>Сортировать по убыванию</a></li>
                        </ul>
                    </div>
                </th>
                <th>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">ФИО
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href={{url('list/full_name')}}>Сортировать по возрастанию</a></li>
                            <li><a href={{url('list/full_name/desc')}}>Сортировать по убыванию</a></li>
                        </ul>
                    </div>
                </th>
                <th>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Должность
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href={{url('list/salary')}}>Сортировать по возрастанию</a></li>
                            <li><a href={{url('list/salary/desc')}}>Сортировать по убыванию</a></li>
                        </ul>
                    </div>
                </th>
                <th>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Зарплата, грн
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href={{url('list/salary')}}>Сортировать по возрастанию</a></li>
                            <li><a href={{url('list/salary/desc')}}>Сортировать по убыванию</a></li>
                        </ul>
                    </div>
                </th>
                <th>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Дата зачисления
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href={{url('list/date')}}>Сортировать по возрастанию</a></li>
                            <li><a href={{url('list/date/desc')}}>Сортировать по убыванию</a></li>
                        </ul>
                    </div>
                </th>
                <th>
                    <a class="btn btn-success btn-sm" href="{{route('main.create')}}">Добавить сотрудника</a>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($test_table as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->full_name}}</td>
                    <td>{{$item->position}}</td>
                    <td>{{$item->salary}}</td>
                    <td>{{$item->date}}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('main.show', $item->id) }}">View</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('main.edit', $item->id) }}">Edit</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['main.destroy', $item->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Del', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $test_table->links() }}

@endsection

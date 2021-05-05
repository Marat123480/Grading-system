@extends('layout')

@section('title')
    Учителя
@endsection

@section('content')
@if(Auth::user()->is_admin == 1)
    @include('create-teacher')
@endif
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Эл. Почта</th>
                    <th scope="col">Телефон</th>
                    @if(Auth::user()->is_admin == 1)
                        <th></th>
                        <th></th>
                    @endif
                </tr>
                </thead>
                @foreach($teachers as $teacher)
                    @if($teacher->is_admin == 0)
                    <tr>
                        <td></td>
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->surname}}</td>
                        <td>{{$teacher->email}}</td>
                        <td>{{$teacher->phone}}</td>
                        @if(Auth::user()->is_admin == 1)
                        <td><a class="btn btn-primary" href="{{action('UserController@getUpdateTeacher', $teacher->id)}}">Изменить</a></td>
                        <td>
                            <form action="{{action('UserController@destroyTeacher', $teacher->id)}}" method="post">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" type="submit">Удалить</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                    @endif
                @endforeach

            </table>
        </div>
    </div>

@endsection

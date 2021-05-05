@extends('layout')

@section('title')
    Студенты
@endsection

@section('content')
@if(Auth::user()->is_admin == 1)
    @include('create-student')
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
                    <th></th>
                    @if(Auth::user()->is_admin == 1)
                        <th></th>
                        <th></th>
                    @endif
                </tr>
                </thead>
                @foreach($students as $student)

                    <tr>
                        <td></td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->surname}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->phone}}</td>
                        <td><a class="btn btn-primary" href="{{action('GradeController@getGrade', $student->id)}}">Оценки</a></td>
                        @if(Auth::user()->is_admin == 1)
                        <td><a class="btn btn-primary" href="{{action('StudentController@getUpdateStudent', $student->id)}}">Изменить</a></td>
                        <td>
                            <form action="{{action('StudentController@destroyStudent', $student->id)}}" method="post">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" type="submit">Удалить</button>
                            </form>
                        </td>
                        @endif
                    </tr>

                @endforeach

            </table>
        </div>
    </div>

@endsection

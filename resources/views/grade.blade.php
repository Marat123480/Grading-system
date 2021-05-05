@extends('layout')
@section('title')
Оценки
@endsection

@section('content')
    @include('add-grade')

    <div class="row">
        <h3>Студент: {{ $student->name }} {{ $student->surname }}</h3>
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Предметы</th>
                    <th scope="col">Преподаватель</th>
                    <th scope="col">Комментарии</th>
                    <th scope="col">Оценки</th>
                    @if(Auth::user()->is_admin == 1)
                        <th scope="col"></th>
                        <th scope="col"></th>
                    @endif
                </tr>
                </thead>

                @php
                    $sum=0;
                    $count = 1;
                @endphp
                @if (count($student->grade) != 0)
                    @foreach($student->grade as $grade)
                    <tr>
                        <td></td>
                        <td>{{$grade->lecture->title}}</td>
                        <td>{{$grade->teacher->name}}</td>
                        <td>{{$grade->comment}}</td>
                        <td>{{$grade->grade}}</td>
                        @if(Auth::user()->is_admin == 1)
                            <td><a class="btn btn-primary" href="{{action('GradeController@getUpdateGrade', $grade->id)}}">Изменить</a></td>
                            <td>
                            <form action="{{action('GradeController@destroyGrade', $grade->id)}}" method="post">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" type="submit">Удалить</button>
                            </form>
                        </td>
                        @endif
                    @php
                        $sum += $grade->grade
                    @endphp
                    </tr>
                    @endforeach
                @endif
                

            </table>
        </div>
    </div>

    @if (count($student->grade) != 0)
        <div class="row">
            <div class="col-12 average">
                <h5>Средняя оценка студента: <span class="badge badge-secondary">{{
                    round($sum/count($student->grade), 1)}} </span></h5>
            </div>
        </div>
    @endif
@endsection

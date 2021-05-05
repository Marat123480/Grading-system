@extends('layout')
@section('title')
    Предметы
@endsection

@section('content')
@if(Auth::user()->is_admin == 1)
    @include('create-lecture')
@endif
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Предметы</th>
                    <th scope="col">Описание</th>
                    @if(Auth::user()->is_admin == 1)
                        <th></th>
                        <th></th>
                    @endif
                </tr>
                </thead>

                @foreach($lectures as $lecture)

                    <tr>
                        <td></td>
                        <td>{{$lecture->title}}</td>
                        <td>{{$lecture->description}}</td>
                        @if(Auth::user()->is_admin == 1)
                            <td><a class="btn btn-primary" href="{{action('LectureController@getUpdateLecture', $lecture->id)}}">Изменить</a></td>
                            <td>
                                <form action="{{action('LectureController@destroyLecture', $lecture->id)}}" method="post">
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

@extends('layout')

@section('title')
    Группы
@endsection

@section('content')
@if(Auth::user()->is_admin == 1)
    @include('create-group')
@endif
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th></th>
                    @if(Auth::user()->is_admin == 1)
                        <th></th>
                        <th></th>
                    @endif
                </tr>
                </thead>
                @foreach($groups as $group)
                    <tr>
                        <td></td>
                        <td>{{$group->name}}</td>
                        <td><a class="btn btn-primary" href="{{action('StudentController@getStudent', $group->id)}}">Студенты</a></td>
                        @if(Auth::user()->is_admin == 1)
                        <td><a class="btn btn-primary" href="{{action('GroupController@getUpdateGroup', $group->id)}}">Изменить</a></td>
                        <td>
                            <form action="{{action('GroupController@destroyGroup', $group->id)}}" method="post">
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

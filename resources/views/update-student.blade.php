@extends('layout')

@section('title')
Редактировать студента
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <h4>Редактировать студента</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="{{action('StudentController@updateStudent', $id)}}">
            <input class="form-control" placeholder="Имя" type="text" value="{{$student->name}}" name="nameI" required>
            <input class="form-control" placeholder="Фамилия" type="text" value="{{$student->surname}}" name="surnameI" required>
            <input class="form-control" placeholder="Почта" type="text" value="{{$student->email}}" name="emailI" required>
            <input class="form-control" placeholder="Номер" type="text" value="{{$student->phone}}" name="phoneI" required>
            <select class="form-control" name="groupIdI" >
                @foreach($groups as $group)
                    @if($group->id == $student->group_id)
                        <option value="{{$group->id}}" selected disabled>{{$group->name}}</option>
                    @else
                        <option value="{{$group->id}}">{{$group->name}}</option>
                    @endif
                @endforeach
            </select>
           
            <button type="submit" class="btn btn-primary">Изменить</button>

            @csrf
            @method('PUT')

        </form>
    </div>
</div>

@endsection

<div class="row">
    <div class="col-12">
        <h4>Добавить оценку</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="{{action('GradeController@storeGrade', $id)}}">
            {{--<input class="form-control" placeholder="Paskaitos ID" type="text" value="{{ old('lectureIdI') }}" name="lectureIdI" required>--}}
            <select class="form-control" name="lectureIdI" >
                <option selected disabled>Выбрать предмет</option>

                @foreach($lectures as $lecture)
                    <option value="{{$lecture->id}}">{{$lecture->title}}</option>
                @endforeach

            </select>
            <input class="form-control" placeholder="Комментарий" type="text" value="{{ old('commentI') }}" name="commentI" required>
            <input class="form-control" placeholder="Оценка" type="text" value="{{ old('gradeI') }}" name="gradeI" required>
            <button type="submit" class="btn btn-primary">Сохранить</button>

            @csrf

        </form>
    </div>
</div>

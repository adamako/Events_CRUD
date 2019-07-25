<div class="form-group {{$errors->has('title')?'has-error':''}}">
    <label for="" class="form-control-sm mb-2 sr-only">Entrer le titre</label>
    <input type="text" class="form-control" name="title" placeholder="titre de l'evenement" value="{{old('title')??$event->title}}">
    {!!$errors->first('title', '<span class="text-danger help-block">:message</span>')!!}
</div>

<div class="form-group {{$errors->has('description')?'has-error':''}}">
    <textarea name="description" class="form-control " id="" cols="30" rows="10">{{$event->description}}</textarea>
    {!!$errors->first('description', '<span class="S help-block">:message</span>')!!}
</div>
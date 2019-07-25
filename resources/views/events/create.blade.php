@extends('layouts.master')

@section('content')
    <h1>Creer un evenement</h1>
    <form action="{{route('events.store')}}" method="POST" class="form-control-lg m-5">
        {{csrf_field()}}
        @include('layouts.partials.form')

        <div class="form-group">
            <button class="btn btn-primary  btn-block"  type="submit">Creer un evenement</button>

        </div>
        <a class="" href="{{route('home')}}">Annuler</a>
    </form>

@stop
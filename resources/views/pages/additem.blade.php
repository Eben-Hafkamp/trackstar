@extends('templates.main')
@section('content')

  @include('components/navbar')

  <form class="create" action="#" method="#">
    <label for="">name of item <span>*</span></label>
    <input type="text" name="#">
    <label for="">select repository <span>*</span></label>
    <input type="text" name="#">
    <button type="button" name="#">update</button>
  </form>

  @include('components/menu')

@stop

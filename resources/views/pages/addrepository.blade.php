@extends('templates.main')

@section('content')

  @include('components.navbar')

  <form class="create" action="#" method="#">
      <label for="">name of repository <span>*</span></label>
      <input type="text" name="name">
      <label for="">description</label>
      <textarea name="name" rows="8" cols="40" resize="disabled"></textarea>
      <button type="button" name="button">update</button>
  </form>

@stop

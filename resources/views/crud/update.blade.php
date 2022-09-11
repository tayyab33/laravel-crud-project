@extends('layouts.app')
@section('content')
<div class="container">
	<h1>updata here</h1>
	<h1>now class is {{ $Home->class }}</h1>
   <form action="/update_now/{{ $Home->id }}" method="post">
 @csrf
  <div class="form-group">
    <label for="Name">enter name</label>
    <input type="text" class="form-control" name="name" id="Name" placeholder="enter name" value="{{ $Home->name }}">
  </div>


  <div class="form-group">
    <label for="class">class</label>
    <select multiple class="form-control text-dark" id="class" name="class" value="{{ $Home->class }}">
      <option>1th</option>
      <option>2th</option>
      <option>3th</option>
      <option>4th</option>
      <option>5th</option>
    </select>
      <button type="submit" class="btn btn-success"> update</button>
  </div>

</form>
</div>
@endsection
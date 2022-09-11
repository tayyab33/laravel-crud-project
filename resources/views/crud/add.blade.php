@extends('layouts.app')
@section('content')
<div class="container">
	
   <form action="/add_data" method="post">
 @csrf
  <div class="form-group">
    <label for="Name">enter name</label>
    <input type="text" class="form-control" name="name" id="Name" placeholder="enter name">
  </div>

  <div class="form-group">
    <label for="class">class</label>
    <select multiple class="form-control" id="class" name="class">
      <option>1th</option>
      <option>2th</option>
      <option>3th</option>
      <option>4th</option>
      <option>5th</option>
    </select>
      <button type="submit" class="btn btn-success"> Add</button>
  </div>

</form>
</div>
@endsection
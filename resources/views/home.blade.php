@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                           <button class="btn btn-success"><a href="/add" class="text-white">Add new</a></button>
                       <div class="card col-md-8 align-item-center">

                         <table class="table table-dark">
  <thead>
      @forelse($data as $dat)
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $dat->id }}</th>
      <td>{{ $dat->name }}</td>
      <td>{{ $dat->class }}</td>
      <td class="col-md-7 text"><button class="btn btn-danger btn-sm"><a href="/delete/{{ $dat->id }}" class="text-white ">Delete</a></button> <button class="btn btn-success btn-sm"><a href="/update/{{ $dat->id }}"  class="text-white">Update</a></button></td>
    </tr>
 @empty
        <h1>nothing is in database sorry</h1>
      @endforelse
  </tbody>
</table>
                       </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

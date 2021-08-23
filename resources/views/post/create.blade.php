@extends('layouts.app')

@section('content')
<div class="card bg-light mb-3" style="max-width: 200rem;">
    <div class="card-header card text-white bg-danger mb-3">Create post</div>
    <div class="card-body">
      <p class="card-text">
<form action="{{route('post.store')}}" method="POST">
    @csrf
    <fieldset>
      <legend>Please Enter Your Information</legend>
      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Subject</label>
        <input name="subject" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter subject">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4">First Name</label>
        <input name="fname" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your first name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4">Last Name</label>
        <input name="lname" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your last name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4">Description (Optional)</label>
        <input name="description" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="Enter your description">
      </div>
      <br>
      <button type="submit" class="btn btn-danger">Create</button>
    </fieldset>
  </form>
</p>
    </div>
</div>
@endsection



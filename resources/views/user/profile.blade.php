@extends('layouts.app')

<style>
  .profile-img {
    max-width: 150px;
    border: 5px solid #fff;
    border-radius: 100%;
    box-shadow: 0 2px 2px rgba(0,0,0,0.3);
  }
</style>

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-body text-center">
          <img class="profile-img" src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-6.jpg" alt="">
          <h1>{{ $user->name }}</h1>
          <h5>{{ $user->email }}</h5>
          <h5>{{ $user->dob->format('l j F Y') }} ({{ $user->dob->age }} Years old)</h5>
          <button class="btn btn-success">Follow</button>
        </div>
      </div>
    </div>
  </div>
@endsection

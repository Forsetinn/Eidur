@extends('app')
@section('content')
<html style="overflow-y: scroll; overflow-x: hidden;">
      <div class="row">
        <div style="position: absolute; background-color: #2b2b2b; padding-top: 65px; padding-right: 0px; padding-bottom: 100%;" class=" col-xs-hidden col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><b style="padding-left: 10px; font-size: 18px;">Overview</b></li>
            <li><a href="{{ url('/profile') }}">View My Profile</a></li>
            <li><a href="#">My Posts</a></li>
            <li><a href="#">My Comments</a></li>
          </ul>
        <hr>
          <ul class="nav nav-sidebar">
            <li><b style="padding-left: 10px; font-size: 18px;">Edit My Profile</b></li>
            <li><a href="{{ url('/profile/avatar') }}">Edit Profile Picture</a></li>
            <li><a href="{{ url('/profile/quote') }}">Edit Quote</a></li>
            <li><a href="{{ url('/profile/password') }}">Reset Password</a></li>
            <li><a href="{{ url('/profile/country') }}">Change Country</a></li>
            <li><a href="{{ url('/profile/name') }}{{ url('/profile/quote') }}">Change Name</a></li>
          </ul>
        </div>
          <hr>
          <div style="margin-top: 50px;" class="container col-sm-8 col-sm-offset-3 col-md-9 col-md-offset-2 col-xs-8 col-xs-offset-3">
            @if ($errors->any())
              <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            @endif
            <div class="panel panel-default">
              <div class="panel-heading">Edit Profile Picture</div>

              <div class="panel-body">
                <a href="{{ url('/profile/avatar') }}">
                  {!! Form::submit('Change Profile Picture', ['class' => 'btn btn-default btn-lg btn-block', 'name' => 'submit', 'accept' => 'image/gif']) !!}
                </a>
                <a href="{{ url('/profile/country') }}">
                  {!! Form::submit('Change Your Country', ['class' => 'btn btn-default btn-lg btn-block', 'name' => 'submit', 'accept' => 'image/gif']) !!}
                </a>
                <a href="{{ url('/profile/quote') }}">
                  {!! Form::submit('Edit your Inspirational Quote', ['class' => 'btn btn-default btn-lg btn-block', 'name' => 'submit', 'accept' => 'image/gif']) !!}
                </a>
                <a href="{{ url('/profile/name') }}">
                  {!! Form::submit('Change Your Display Name', ['class' => 'btn btn-default btn-lg btn-block', 'name' => 'submit', 'accept' => 'image/gif']) !!}
                </a>
                <a href="{{ url('/profile/password') }}">
                  {!! Form::submit('Change Your Password', ['class' => 'btn btn-default btn-lg btn-block', 'name' => 'submit', 'accept' => 'image/gif']) !!}
                </a>
              </div>
            </div>
          </div>

@stop

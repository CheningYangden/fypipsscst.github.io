@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!--START SIDEBAR -->

    <div></div>



        <div class="col-md-3">

        <div class="card">
                <div class="card-header">SIDEBAR</div>
                <img src="/img/avatar/{{Auth::user()->avatar}}" alt="profile_picture"style="width:250px; height=250px;">
               
        </div> 
        <br >

            <div class="card">
                <div class="card-header">SIDEBAR</div>
                <a href="{!! route('home')!!}" class="btn btn-primary btn-block">Dashboard</a>
                <a href="{!! route('profile')!!}" class="btn btn-primary btn-block">Profile settings</a>
                <a href="{!! route('changepassword')!!}" class="btn btn-primary btn-block">Change Password</a>
                <a href="{!! route('profileavatar')!!}" class="btn btn-primary btn-block">Upload Profile Picture</a>
                <a href="#" class="btn btn-primary btn-block">Notification</a>
                <a href="#" class="btn btn-primary btn-block">Map</a>

            </div> 
        </div>
            
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{Auth::user()->name}}'s Dashboard</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <h5>{{Auth::user()->name}}</h5>You are logged in!
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

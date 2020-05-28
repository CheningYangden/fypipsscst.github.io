@extends('layouts.app')

@section('content')
<div class="container">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $errors)
            <li>{{ $errors }}</li>
            @endforeach
        </ul>
    
    </div>
    @endif
    @if (session('error'))
     <div class="alert alert-danger" role="alert">
     {{session('error')}}
     </div>
    @endif

    @if(session()->get('message'))
        <div class="alert alert-success" role="alert">
            <a href="#" class="close" data-dismiss="alert" arial-label-="close">&times;</a>
            <strong>SUCCESS: </strong>{{session()->get('message')}}
        </div>
    @endif


    <div class="row justify-content-center">
        <!--START SIDEBAR -->
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
                            {{session('status')}}
                        </div>
                    @endif
                    <form action="{!!route('changepassword')!!}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="current_password"><srtong>Current Password:</strong></label>
                            <input type="password" class="form-control" id="current_password" name="current_password">
                        </div>

                        <div class="form-group">
                            <label for="new_password"><srtong>New Password:</strong></label>
                            <input type="password" class="form-control" id="new_password" name="new_password">
                        </div>

                        <div class="form-group">
                            <label for="new_password_confirmation"><srtong>Confirm New Password:</strong></label>
                            <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
                        </div>
                        <!--end Name Input-->

                       
                        <button class="btn btn-primary" type="submit">Change Password</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

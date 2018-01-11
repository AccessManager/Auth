@extends('Base::layout')

@section('box-header')
    Change System Password
@endsection

@section('content')
    {!! Form::open(['route'=>'system.change-password.post', 'class'=>'form-horizontal']) !!}
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="fieldset">
                <div class="form-group">
                    <label for="" class="control-label col-md-4">Current Password</label>
                    <div class="col-md-6">
                        {!! Form::password('current_password',  ['class'=>'form-control',]) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-4">New Password</label>
                    <div class="col-md-6">
                        {!! Form::password('new_password',  ['class'=>'form-control',]) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-4">Confirm New Password</label>
                    <div class="col-md-6">
                        {!! Form::password('new_password_confirmation', ['class'=>'form-control',]) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-md-offset-4">
            {!! Form::submit('Change Password', ['class'=>'form-control btn btn-block btn-flat bg-orange']) !!}
        </div>
    </div>
    {!! Form::close() !!}
@endsection
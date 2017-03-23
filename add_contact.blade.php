@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Contact Page <a href="{{ url('add_contact') }}">Add contact</a>
                    
                    
                    {!! Form::open(['url' => 'save_contact']) !!}
                    {!! Form::hidden('user_id',Auth::user()->id) !!}
                      Name : {!! Form::text('name') !!}<br/><br/>
                      Email : {!! Form::text('email') !!}<br/><br/>
                      Phone : {!! Form::text('phone') !!}<br/><br/>
                      Address : {!! Form::text('address') !!}<br/><br/>
                      Company : {!! Form::text('company') !!}<br/><br/>
                      Date of Birth : {!! Form::text('dob') !!}<br/><br/>
                      {!! Form::submit('Submit') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

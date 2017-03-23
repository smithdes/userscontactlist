@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Contact Page <a href="{{ url('add_contact') }}">Add contact</a>
                    
                    
                    {!! Form::open(['url' => 'update_contact']) !!}
                    {!! Form::hidden('id',$contacts->id) !!}
                      Name : {!! Form::text('name',$contacts->name) !!}<br/><br/>
                      Email : {!! Form::text('email',$contacts->email) !!}<br/><br/>
                      Phone : {!! Form::text('phone',$contacts->phone) !!}<br/><br/>
                      Address : {!! Form::text('address',$contacts->address) !!}<br/><br/>
                      Company : {!! Form::text('company',$contacts->company) !!}<br/><br/>
                      Date of Birth : {!! Form::text('dob',$contacts->dob) !!}<br/><br/>
                      {!! Form::submit('Update') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Contact Page <a href="{{ url('add_contact') }}">Add contact</a>
                    <table border="1">
                    <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>Company</td>
                    <td>Date Of Birth</td>
                     <td>Action</td>
                    </tr>
                    @foreach ($contacts as $contact)
                    <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->company }}</td>                                                                                
                    <td>{{ $contact->dob }}</td> 
                    <td><a href="{{ url('edit') }}/{{ $contact->id }}">Edit </a>/ <a href="{{ url('delete') }}/{{ $contact->id }}" onclick="return confirm('Are You Sure');">Delete</a></td>                    
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

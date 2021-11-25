@extends('user.layouts.app')
@section('content')
    <strong>Create New CONTACT </strong>
    <br><br>
<form action="{{route('contacts.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Title"  required>
        </div>
    </div>


    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email"  required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject"  required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="message">message</label>
            <input type="text" class="form-control" id="message" name="message" placeholder="Enter message"  required>
        </div>
    </div>


    <button class="btn btn-primary" type="submit">Submit form</button>
</form>
<br> <br>
@endsection

@extends('layouts.app')
@section('content')
    <strong>Create New member </strong>
<form action="{{route('members.store')}}" method="POST" enctype="multipart/form-data">
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
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter address"  required>
        </div>
    </div>

    <div class="form-row m-3">
        <div class="col-md-9 mb-3">
            <label><strong>Education</strong></label><br>
            <input type="checkbox" value="ssc" name="education[]"  class="form-check-input px-3">SSC<br>
            <input type="checkbox" value="hsc" name="education[]"  class="form-check-input px-3">HSC<br>
            <input type="checkbox" value="graduate" name="education[]"  class="form-check-input px-3">Graduate<br>
        </div>
    </div>



    <div class="col-md-6 mb-3">
        <label for="device">Group</label>
        <select class="custom-select" id="inputGroupSelect03" name="group_id">
            <option selected>Choose...</option>
            @foreach($groups as $group)
                <option value="{{$group->id}}">{{$group->name}}</option>
            @endforeach
        </select>
    </div>



    <button class="btn btn-primary" type="submit">Submit form</button>
</form>
<br> <br>
@endsection

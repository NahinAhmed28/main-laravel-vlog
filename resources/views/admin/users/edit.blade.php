@extends('admin.layouts.app')
@section('content')
    <strong>ADD User Info </strong>
<form action="{{route('users.update',$user->id)}}" method="post" >
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone"  required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="country">country</label>
            <input type="text" class="form-control" id="country" name="country" placeholder="Enter country"  required>
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


    <button class="btn btn-info" type="submit">Submit Info</button>
</form>
<br> <br>
@endsection

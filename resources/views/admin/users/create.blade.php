@extends('admin.layouts.app')
@section('content')

    <strong style="color: red">Create New User (under construction !) </strong>
    <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"  required>
            </div>
        </div>


        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email"  required>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="password">password</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Enter password"  required>
            </div>
        </div>


        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="email">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone"  required>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="email">Country</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Enter country"  required>
            </div>
        </div>
         <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="email">Address</label>
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
            <label for="device">Role</label>
            <select class="custom-select" id="inputGroupSelect03" name="role_id">
                <option selected>Choose...</option>
                @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
        </div>



        <button class="btn btn-primary" type="submit">Submit User Info</button>
    </form>
    <br> <br>


@endsection

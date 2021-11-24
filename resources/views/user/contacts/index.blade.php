@extends('admin.layouts.app')
@section('content')
    <div class="col-md-6" style="display: block;margin-right: 100px ;width: 20px">
        <a class="btn btn-success" href="{{route('contacts.create')}}" role="button"> See Contact Form</a>
    </div>
<h3>Only admin can see below <br> User will be redirected to create contact form</h3>
    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>


        </tr>
        </thead>

        <tbody>
        @foreach($contacts as $contact)
            <tr>

                <td>{{$contact->id}}</td>
                <td>{{$contact->id}}</td>
                <td> {{$contact->title}}</td>
                <td> {{$contact->description}}</td>


            </tr>

        @endforeach


        {{-------}}

        </tbody>

    </table>
@endsection

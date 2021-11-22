@extends('layouts.app')
@section('content')
    <div class="col-md-6" style="display: block;margin: 0 auto;">
        <a class="btn btn-warning" href="{{route('categories.create')}}" role="button">  @include('layouts.rightarrow')Create Contact Form</a>
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

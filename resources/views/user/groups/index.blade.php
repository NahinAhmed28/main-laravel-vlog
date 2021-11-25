@extends('user.layouts.app')
@section('content')


    <br/>
    <br/>


    {{--    show user table--}}

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Group Name</th>
                <th>Description</th>


            </tr>
            </thead>
            <tbody>

            @foreach($groups as $group)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $group->name }}</td>
                    <td>{{ $group->description }}</td>


                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection

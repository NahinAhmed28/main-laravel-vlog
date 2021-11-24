@extends('admin.layouts.app')
@section('content')

    <a href="{{route('groups.create')}}" style="float: right" class="btn btn-warning btn-sm" title="Add New group">
        @include('admin.layouts.rightarrow')   <i class="fa fa-plus" aria-hidden="true"></i> Add New group
    </a>
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

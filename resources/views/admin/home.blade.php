@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div style=" display: block;margin-left: 400px; margin-top: 50px">
<ol class="m-3" style="width: 600px;"> <strong> Admin Can Access: </strong>
    <li class="list-group-item"> See Contact List</li>
    <li class="list-group-item"> Create new categories</li>
    <li class="list-group-item"> Edit posts</li>
    <li class="list-group-item"> Register new users</li>
    <li class="list-group-item"> See & edit registered users</li>
    <li class="list-group-item"> Including all general users access</li>
</ol>
</div>

@endsection

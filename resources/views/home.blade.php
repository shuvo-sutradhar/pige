@extends('layouts.master')

@section('breadcrumb')
<h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">
    Hi, {{ ucfirst(Auth::user()->name) }} Good Day.
</h1>

<nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
</nav>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

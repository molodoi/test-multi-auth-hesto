@extends('frontend.layout.app')

@section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Frontend</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

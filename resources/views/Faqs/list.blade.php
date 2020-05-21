@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard

                    <a href="{{ route('faqs.displayCreate')}}" class="btn btn-primary" style="float: right;">{{ __('Create') }}</a></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <example-component></example-component>
                        @foreach ($faqs as $FAQ)
                            <div class="form-inline">
                                <div class="col-md-8 offset-md-1">
                                    <ul class="list-group">
                                    <!--  <li class="list-group-item">question number {{ $FAQ->id }}</li>-->
                                        <li class="list-group-item list-group-item-action flex-column align-items-start" style="background-color: #ced4da">{{ $FAQ->question }}</li>
                                        <li class="list-group-item list-group-item-action flex-column align-items-start">Our answer {{ $FAQ->answer }}</li>
                                    <!-- <li class="list-group-item">This is the FAQ order : {{ $FAQ->order }}</li>-->
                                    </ul>

                                </div>
                                <div class="col-md-1">
                                    <a href="{{ route('faqs.displayEdit', $FAQ->id) }}" class="btn btn-success">{{ __('Edit') }}</a>
                                </div>
                                <div class="col-md-1">
                                    <a href="{{ route('faqs.delete',['id'=>$FAQ->id])}}" class="btn btn-danger">{{ __('Delete') }}</a>
                                </div>
                            </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

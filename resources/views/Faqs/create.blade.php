@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add FAQ</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('faqs.create') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="question" class="col-md-4 col-form-label text-md-right">{{ __('Question') }}</label>

                                <div class="col-md-6">
                                    <input id="question" type="text" class="form-control @error('question') is-invalid @enderror" name="question" value="{{ old('question') }}" required autofocus>

                                    @error('question')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="question" class="col-md-4 col-form-label text-md-right">{{ __('new new') }}</label>

                                <div class="col-md-6">
                                    <clearable-input></clearable-input>
                                    @error('question')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="answer" class="col-md-4 col-form-label text-md-right">{{ __('Answer') }}</label>

                                <div class="col-md-6">
                                    <input id="answer" type="text" class="form-control @error('question') is-invalid @enderror" name="answer" value="{{ old('answer') }}" required autofocus>

                                    @error('answer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="order" class="col-md-4 col-form-label text-md-right">{{ __('Order') }}</label>

                                <div class="col-md-6">
                                    <input id="order" type="text" class="form-control @error('question') is-invalid @enderror" name="order" value="{{ old('order') }}" required autofocus>

                                    @error('answer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="activated" id="activated" {{ old('activated') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="activated">
                                            {{ __('Active') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

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

                        <form method="POST" action="{{ route('summarize') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="paragraph" class="col-md-4 col-form-label text-md-right">{{ __('Paragraph') }}</label>

                                <div class="col-md-6">
                                    <textarea id="paragraph" type="textarea" class="form-control{{ $errors->has('paragraph') ? ' is-invalid' : '' }}" name="paragraph"
                                              rows="7" placeholder="Enter text paragraph to summarize" required>
                                    </textarea>

                                    @if ($errors->has('paragraph'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('paragraph') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Summarize') }}
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

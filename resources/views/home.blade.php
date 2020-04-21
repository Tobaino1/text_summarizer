@extends('layouts.homehead')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header" align="center">Carry out a Text Summary using any of the input form Based on your Age Variation</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                           <div align="center" style="color: #146838">MIDDLE SCHOOL LEVEL / BASIC (Ages 10-14)</div> <br>
                        <form method="POST" class="mb-4" action="{{ route('summarize') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="paragraph" class="col-md-3 col-form-label text-md-right">{{ __('Paragraph') }}</label>

                                <div class="col-md-8">
                                    <textarea id="paragraph" type="textarea" class="form-control{{ $errors->has('paragraph') ? ' is-invalid' : '' }}" name="paragraph"
                                              rows="7"
                                              placeholder="Enter text paragraph / copy & paste from a source in order to summarize"
                                              required>
                                    </textarea>

                                    @if ($errors->has('paragraph'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('paragraph') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Summarize') }}
                                    </button>
                                </div>
                            </div>

                        </form>


                        @if (session('response'))
                            <div class="alert alert-success" role="alert">

                                <h5 class="alert-heading">Paragraph</h5>
                                <p>{{ session('paragraph') }}</p>

                                <hr>

                                <h5 class="alert-heading">Summarized Text</h5>
                                <p class="mb-0">{{ session('response') }}</p>

                            </div>
                        @endif


                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">

                                <h5 class="alert-heading">An Error Occurred</h5>
                                <p>{{ session('error') }}</p>

                            </div>
                        @endif


                    </div>

<br><br>
                    <div align="center" style="color: #146838">LOWER SCHOOL LEVEL / NURSERY-PRIMARY (Ages 5-10)</div> <br>



                    <form method="POST" class="mb-4" action="{{ route('summarize_two') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="paragraph" class="col-md-3 col-form-label text-md-right">{{ __('Paragraph') }}</label>

                            <div class="col-md-8">
                                    <textarea id="paragraph" type="textarea" class="form-control{{ $errors->has('paragraph') ? ' is-invalid' : '' }}" name="paragraph"
                                              rows="7"
                                              placeholder="Enter text paragraph / copy & paste from a source in order to summarize"
                                              required>
                                    </textarea>

                                @if ($errors->has('paragraph'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('paragraph') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Summarize') }}
                                </button>
                            </div>
                        </div>

                    </form>



                    <div class="card-footer text-muted">
                        @if (session('balance'))
                            <p>Credit Balance: {{ session('balance') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection


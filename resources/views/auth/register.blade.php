@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card justify-content-center">
                    <div class="card-header justify-content-center">{{ __('Register') }}</div>

                    <div class="card-body justify-content-center">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">

                                <div class="col-md-8">
                                        <?php
                                        $centers =\App\Center::all();
                                        ?>
                                            <select id="center_id" class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}" onchange="document.getElementById('center_id').submit()"
                                                    name="center_id" required>
                                                <option  value="">Select Center:</option>

                                            @foreach ($centers as $center)
                                                <option  value="{{  $center->id }}">{{  $center->name }}</option>
                                            @endforeach

                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-md-8">
                                    <input id="first_name" placeholder="First Name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>


                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-md-8">
                                    <input id="last_name" placeholder="Last Name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>


                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input id="address" placeholder="Address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>
                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input id="phone" placeholder="Phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-8">
                                    <input id="email" placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-8">
                                    <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input id="password-confirm" placeholder="Confrim Password" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-2">
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
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

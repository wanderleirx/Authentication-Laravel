@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col l6 offset-l3">
            <h4>Login</h4>
            <form class="" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">E-Mail Address</label>
                    <div>
                        <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" >Password</label>
                    <div >
                        <input id="password" type="password" class="validate" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div>
                    <div class="validate">
                        <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                        <label for="filled-in-box">Filled in</label>
                    </div>
                </div>

                <div class="input-field"">
                    <div>
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

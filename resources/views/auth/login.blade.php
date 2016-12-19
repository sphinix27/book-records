@extends('_layouts.master')

@section('body')
<div class="container">
<br>
    <div class="row">
        <div class="column is-8 is-offset-2">
            <div class="panel">
                <div class="panel-heading">Login</div>
                <div class="panel-block">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="columns">
                            <div class="column is-8 is-offset-2">
                                <label class="label">E-mail Address</label>
                                <p class="control has-icon">
                                    <input class="input {{ $errors->has('email') ? 'is-danger' : ''}}" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                    <i class="fa fa-envelope"></i>
                                </p>

                                @if ($errors->has('email'))
                                    <span class="help is-danger">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="columns">

                            <div class="column is-8 is-offset-2">
                                <label class="label">Password</label>
                                <p class="control has-icon">
                                    <input class="input {{ $errors->has('email') ? 'is-danger' : ''}}" type="password" name="password" placeholder="Password" required>
                                    <i class="fa fa-lock"></i>
                                </p>

                                @if ($errors->has('password'))
                                    <span class="help is-danger">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="columns">
                            <div class="column is-8 is-offset-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="columns">
                            <div class="column is-8 is-offset-2">
                                <button type="submit" class="button is-primary">
                                    Login
                                </button>

                                <a class="button is-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

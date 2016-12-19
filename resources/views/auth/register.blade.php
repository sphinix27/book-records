@extends('_layouts.master')

@section('body')
<div class="container">
    <div class="row">
        <div class="column is-8 is-offset-2">
            <div class="panel">
                <div class="panel-heading">Register</div>
                <div class="panel-block">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="columns">
                            <div class="column is-8 is-offset-2">
                                <label for="name" class="label">Name</label>
                                <p class="control has-icon">
                                    <input id="name" type="text" class="input {{ $errors->has('name') ? 'is-danger' : ''}}" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                                    <i class="fa fa-user"></i>
                                </p>
                                @if ($errors->has('name'))
                                    <span class="help is-danger">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-8 is-offset-2">
                                <label class="label">E-mail Address</label>
                                <p class="control has-icon">
                                    <input class="input {{ $errors->has('email') ? 'is-danger' : ''}}" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
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
                                    <input class="input {{ $errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" placeholder="Password" required>
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
                                <label for="password-confirm" class="label">Confirm Password</label>
                                <input class="input" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="columns">
                            <div class="column is-8 is-offset-2">
                                <button type="submit" class="button is-primary">
                                    Register
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

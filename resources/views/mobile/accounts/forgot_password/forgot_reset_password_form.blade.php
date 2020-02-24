@extends('mobile.extra_master')
@section('page_content')
<!-- Begin Bar Nav -->
<header class="bar bar-nav ">
    <a class="btn btn-link btn-nav pull-left" href="{{ url('/') }}">
        <span class="icon icon-left-nav"></span>
    </a>
    <a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
        <span class="icon icon-bars"></span>
    </a>
    <h1 class="title">Reset Password</h1>
</header>
<!-- //End Bar Nav -->
<div class="content">
    <div class="container page-sitemap">
        <div class="row">
            <div id="content" class="col-xs-12">
                <div class="tab-account">
                    <div class="tab-content">
                        <div id="home" class="tab-pane form-login fade active in">
                            <div class="well col-sm-12">
                                <h2 >Set your new password</h2>
                                <p class="hidden"><strong>I am a returning customer</strong>
                                </p>
                                <form action="{{route('mobile.forget.reset.password')}}" method="post">
                                    @csrf
                                <input type="hidden" name="remember_token" value="{{ $remember_token }}">
                                    <div class="form-group form-user">
                                        <label class="control-label font-ct" for="input-email">Password</label>
                                        <input type="text" name="password" value=""
                                            placeholder="Password" id="input-email" class="form-control">
                                        <span class="text-danger text-center d-block">{{ $errors->first('password') }}</span>
                                    </div>
                                    <div class="form-group form-user">
                                        <label class="control-label font-ct" for="input-email">Confirm Password</label>
                                        <input type="text" name="password_confirmation" value=""
                                            placeholder="Confirm password" id="input-email" class="form-control">
                                    </div>
                                    <input type="submit" value="Submit" class="btn btn-primary pull-left">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
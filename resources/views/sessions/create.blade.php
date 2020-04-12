@extends('layouts.default')
@section('title', '登录')
@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card ">
    <div class="card-header">
      <h5>登录</h5>
    </div>
    <div class="card-body">
      @include('shared._errors')
      <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="email">邮箱：</label>
          <input type="text" name="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
          <label for="password">密码（<a href="{{ route('password.request') }}">忘记密码</a>）：</label>
          <input type="password" name="password" class="form-control" value="{{ old('password') }}">
        </div>

        <div class="form-group">
          <label for="captcha">验证码:</label>
          <div class="media">
            <input class="form-control col-lg-9 media-body" type="text"  maxlength="4" name="captcha" >
            <img class="media-right" border="0" style="cursor:pointer" title='点击刷新验证码' alt="点击刷新验证码"  src="{{captcha_src()}}"  onclick="this.src='{{captcha_src()}}?r='+Math.random();">
          </div>
        </div>


        <div class="form-group">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">记住我</label>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">登录</button>
      </form>

      <hr>

      <p>还没账号？<a href="{{ route('signup') }}">现在注册！</a></p>
    </div>
  </div>
</div>
@stop

@extends('layout.default')
@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      你现在看到的就是一个微博系统啦
    </p>
    <p>
      一切将从这里开始
    </p>
    <p>
      <a href="{{route('signUp')}}" class="btn btn-lg btn-success" role="button">现在注册</a>
    </p>
  </div>
@stop

@extends('layouts.Admin_app')

@section('icerik')
<div class="white-box">
    <form class="form-horizontal form-material" id="loginform" method="POST"  action="{{ route('register') }}">
    {{ csrf_field() }}
    <!--<a href="javascript:void(0)" class="text-center db"><img src="{//{ URL::asset('plugins/images/admin-logo-dark.png')}}" alt="Home" /><br/> <img src="{//{ URL::asset('plugins/images/admin-text-dark.png')}}" alt="Home" /></a>
-->
        <h3 class="box-title m-t-40 m-b-0"> Öğrenci Ekle</h3><small>Güzel Seçim</small>
        <div class="form-group m-t-20 {{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-xs-12">
                <input class="form-control" id="name" name="name" value="{{ old('name') }}" type="text" required="" placeholder="İsim">
            </div>
        </div>

        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="col-xs-12">
                <input class="form-control" id="email" name="email" value="{{ old('email') }}" type="text" required="" placeholder="Email">
            </div>
        </div>

        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="col-xs-12">
                <input class="form-control" id="password" name="password" value="{{ old('password') }}" type="password" required="" placeholder="Şifre">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" id="password-confirm" name="password_confirmation" type="password" required="" placeholder="Şifre">
            </div>
        </div>

        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Kaydet</button>
            </div>
        </div>

    </form>
</div>

    @endsection
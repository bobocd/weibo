@extends('layouts.default')
@section('title', '更新密码')
@section('content')
    <div class="offset-md-1 col-md-10">
        <div class="card">
            <div class="card-header">
                <h5>更新密码</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email 地址</label>
                            <div class="col-md-6">

                                    </div>
                                    </div>
                                    <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">密码</l
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has(

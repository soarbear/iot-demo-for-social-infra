@extends('app')
@section('htmlheader_title')担当者編集@endsection
@section('contentheader_title')担当者編集@endsection
@section('previous_link')"{{ url('/users') }}"@endsection
@section('previous_page')担当者一覧@endsection
@section('current_page')編集@endsection

@section('main-content')
@include('error-notification')

<div class="box box-success">
    <div class="box-header with-border">
        <h2 class="box-title">担当者編集</h2>
    </div>
    <div class="box-body">
        <!-- if there are creation errors, they will show here -->
        {!! Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) !!}
            <div class="form-group">
                {!! Form::label('name', '担当者') !!}
                {!! Form::text('name', null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'メールアドレス') !!}
                {!! Form::text('email', null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'パスワード') !!}
                {!! Form::password('password', array('class' => 'form-control')) !!}
            </div>     
            <div class="form-group">
                {!! Form::label('password_confirm', 'パスワード確認') !!}
                {!! Form::password('password_confirm', array('class' => 'form-control')) !!}
            </div>
            {!! Form::submit('更新', array('class' => 'btn btn-default')) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection

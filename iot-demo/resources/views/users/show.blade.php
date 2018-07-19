@extends('app')
@section('htmlheader_title')担当者詳細@endsection
@section('contentheader_title')担当者詳細@endsection
@section('previous_link')"{{ url('/users') }}"@endsection
@section('previous_page')担当者一覧@endsection
@section('current_page')詳細@endsection

@section('main-content')
@include('error-notification')

<div class="box box-success">
    <div class="box-header with-border">
        <h2 class="box-title">担当者詳細</h2>
    </div>
    <div class="box-body">
        <p><a class="btn btn-default btn-md" href="{{ URL::to('users/create') }}"><i class="fa fa-plus"></i> 担当者追加</a>
        <a class="btn btn-default btn-md" href="{{ URL::to('users/' . $user->id . '/edit') }}"><i class="fa fa-pencil-square-o"></i> データ編集</a></p>
        <!--<table id="userShow" class="display table table-bordered table-stripe" cellspacing="0" width="100%">-->
        <table class="tableShow table table-striped table-bordered">        
            <thead>
                <tr>
                    <td>ID</td>
                    <td>項目</td>
                    <td>内容</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>担当者ＩＤ</td>
                    <td>{{ $user->id }}</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>担当者名</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>メールアドレス</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>作成日</td>            
                    <td>{{ $user->created_at }}</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>更新日</td>            
                    <td>{{ $user->updated_at }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

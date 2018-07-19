@extends('app')
@section('htmlheader_title')担当者一覧@endsection
@section('contentheader_title')担当者一覧@endsection
@section('previous_link')"{{ url('/dashboard') }}"@endsection
@section('previous_page')ホーム@endsection
@section('current_page')担当者一覧@endsection

@section('main-content')
@include('error-notification')

<div class="box box-success">
    <div class="box-header with-border">
        <h2 class="box-title">担当者一覧</h2>
    </div>
    <div class="box-body">
        <p><a class="btn btn-default btn-md" href="{{ URL::to('users/create') }}"><i class="fa fa-plus"></i> 担当者追加</a></p>
        <!--<table id="buildingsDash" class="display table table-bordered table-stripe" cellspacing="0" width="100%">-->
        <table class="tableShow table table-striped table-bordered">        
            <thead>
                <tr>
                    <td>担当者ＩＤ</td>
                    <td>担当者名</td>
                    <td>作成日</td>
                    <td>更新日</td>
                    <td>操作</td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->created_at }}</td>
                        <td>{{ $value->updated_at }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a class="btn btn-xs btn-default" href="{{ URL::to('users/' . $value->id) }}"><i class="fa fa-dedent"></i> 表示</a>
                                <a class="btn btn-xs btn-default" href="{{ URL::to('users/' . $value->id . '/edit') }}"><i class="fa fa-pencil-square-o"></i> 編集</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
 @endsection

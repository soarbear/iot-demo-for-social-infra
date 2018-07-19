@extends('app')
@section('htmlheader_title')一戸建て案件@endsection
@section('contentheader_title')一戸建て案件@endsection
@section('previous_link')"{{ url('/dashboard') }}"@endsection
@section('previous_page')ホーム@endsection
@section('current_page')案件一覧@endsection

@section('main-content')
@include('error-notification')
 
<div class="box box-warning">
    <div class="box-header with-border">
        <h2 class="box-title">一戸建て案件</h2>
    </div>
    <div class="box-body">
        <p><a class="btn btn-default btn-md" href="{{ URL::to('houses/create') }}"><i class="fa fa-cube"></i> 案件追加</a></p>
        <!--<table id="housesDash" class="display table table-bordered table-stripe" cellspacing="0" width="100%">-->
        <table class="tableShow table table-striped table-bordered">      
            <thead>
                <tr>
                    <td>案件ＩＤ</td>
                    <td>案件名称</td>
                    <td>案件状況</td>
                    <td>担当者</td>
                    <td>担当者ＩＤ</td>                                    
                    <td>作成日</td>
                    <td>更新日</td>
                    <td>操作</td>
                </tr>
            </thead>
            <tbody>
                @foreach($houses as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->project_name }}</td>
                        <td>{{ $value->status }}</td>
                        <td>{{ $value->user_name }}</td>
                        <td>{{ $value->user_id }}</td>                       
                        <td>{{ $value->created_at }}</td>
                        <td>{{ $value->updated_at }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a class="btn btn-xs btn-default" href="{{ URL::to('houses/' . $value->id) }}"><i class="fa fa-dedent"></i> 表示</a>
                                <a class="btn btn-xs btn-default" href="{{ URL::to('houses/' . $value->id . '/edit') }}"><i class="fa fa-pencil-square-o"></i> 編集</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
 @endsection

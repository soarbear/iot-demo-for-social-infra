@extends('app')
@section('htmlheader_title')橋梁点検画像@endsection
@section('contentheader_title')橋梁点検画像@endsection
@section('previous_link')"{{ url('/dashboard') }}"@endsection
@section('previous_page')ホーム@endsection
@section('current_page')橋梁点検画像@endsection

@section('main-content')
@include('error-notification')
 
<div class="box box-success">
    <div class="box-header with-border">
        <h2 class="box-title">橋梁点検画像</h2>
    </div>
    <div class="box-body">
        <table class="tableShow table table-striped table-bordered">
            <thead>
                <tr>
                    <td>橋梁ＩＤ</td>
                    <td>橋梁名称</td>
                    <td>橋梁状況</td>
                    <td>担当者</td>
                    <td>担当者ＩＤ</td> 
                    <td>画像数</td>                    
                    <td>作成日</td>
                    <td>更新日</td>
                    <td>操作</td>
                </tr>
            </thead>
            <tbody>
                @foreach($buildings as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->project_name }}</td>
                        <td>{{ $value->status }}</td>
                        <td>{{ $value->user_name }}</td>
                        <td>{{ $value->user_id }}</td>
                        <td>{{ $value->images()->count() }}</td>
                        <td>{{ $value->created_at }}</td>
                        <td>{{ $value->updated_at }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a class="btn btn-xs btn-default" href="{{ URL::to('building_images/' . $value->id) }}"><i class="fa fa-dedent"></i> 表示</a>
                                <a class="btn btn-xs btn-default" href="{{ URL::to('building_images/' . $value->id . '/edit') }}"><i class="fa fa-pencil-square-o"></i> 編集</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 </div>
 @endsection

@extends('app')
@section('htmlheader_title')ダッシュボード@endsection
@section('contentheader_title')ダッシュボード@endsection
@section('previous_link')"{{ url('/dashboard') }}"@endsection
@section('previous_page')ホーム@endsection
@section('current_page')ダッシュボード@endsection

@section('main-content')
@include('error-notification')

<!-- Apply any bg-* class to to the info-box to color it -->
<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-aqua">
          <span class="info-box-icon"><i class="fa fa-hospital-o"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">橋梁数</span>
            <span class="info-box-number">32</span>
            <!-- The progress section is optional -->
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              100% 点検対象
            </span>
          </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">  
        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="fa fa-home"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">土構造物数</span>
            <span class="info-box-number">32</span>
            <!-- The progress section is optional -->
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              100% 点検対象
            </span>
          </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">  
        <div class="info-box bg-orange">
          <span class="info-box-icon"><i class="fa fa-building-o"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">トンネル数</span>
            <span class="info-box-number">32</span>
            <!-- The progress section is optional -->
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              100% 点検対象
            </span>
          </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">  
        <div class="info-box bg-red">
          <span class="info-box-icon"><i class="fa fa-users"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">システム利用者数</span>
            <span class="info-box-number">2</span>
            <!-- The progress section is optional -->
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              担当者1名、管理者1名
            </span>
          </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>    
</div>
<div class="box box-success">
    <div class="box-header with-border">
        <h2 class="box-title">橋梁</h2>
    </div>
    <div class="box-body">
        <p><a class="btn btn-default btn-md" href="{{ URL::to('buildings/create') }}"><i class="fa fa-cube"></i> 橋梁追加</a></p>
        <!--<table id="buildingsDash" class="display table table-bordered table-stripe" cellspacing="0" width="100%">-->
        <table class="tableShow table table-striped table-bordered">
            <thead>
                <tr>
                    <td>橋梁ＩＤ</td>
                    <td>橋梁名称</td>
                    <td>橋梁状況</td>
                    <td>担当者</td>
                    <td>担当者ＩＤ</td>                  
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
                        <td>{{ $value->created_at }}</td>
                        <td>{{ $value->updated_at }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a class="btn btn-xs btn-default" href="{{ URL::to('buildings/' . $value->id) }}"><i class="fa fa-dedent"></i> 表示</a>
                                <a class="btn btn-xs btn-default" href="{{ URL::to('buildings/' . $value->id . '/edit') }}"><i class="fa fa-pencil-square-o"></i> 編集</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 </div>
 <div class="box box-warning">
    <div class="box-header with-border">
        <h2 class="box-title">土構造物</h2>
    </div>
    <div class="box-body">
        <p><a class="btn btn-default btn-md" href="{{ URL::to('houses/create') }}"><i class="fa fa-cube"></i> 土構造物追加</a></p>
        <!--<table id="housesDash" class="display table table-bordered table-stripe" cellspacing="0" width="100%">-->
        <table class="tableShow table table-striped table-bordered">
            <thead>
                <tr>
                    <td>土構造物ＩＤ</td>
                    <td>土構造物名称</td>
                    <td>土構造物状況</td>
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
 <div class="box box-danger">
    <div class="box-header with-border">
        <h2 class="box-title">トンネル</h2>
    </div>
    <div class="box-body">
        <p><a class="btn btn-default btn-md" href="{{ URL::to('mansions/create') }}"><i class="fa fa-cube"></i> トンネル追加</a></p>
        <!--<table id="mansionsDash" class="display table table-bordered table-stripe" cellspacing="0" width="100%">-->
        <table class="tableShow table table-striped table-bordered">
            <thead>
                <tr>
                    <td>トンネルＩＤ</td>
                    <td>トンネル名称</td>
                    <td>トンネル状況</td>
                    <td>担当者</td>
                    <td>担当者ＩＤ</td>                                     
                    <td>作成日</td>
                    <td>更新日</td>
                    <td>操作</td>
                </tr>
            </thead>
            <tbody>
                @foreach($mansions as $key => $value)
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
                                <a class="btn btn-xs btn-default" href="{{ URL::to('mansions/' . $value->id) }}"><i class="fa fa-dedent"></i> 表示</a>
                                <a class="btn btn-xs btn-default" href="{{ URL::to('mansions/' . $value->id . '/edit') }}"><i class="fa fa-pencil-square-o"></i> 編集</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
 
@endsection

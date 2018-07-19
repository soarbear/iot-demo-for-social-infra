@extends('app')
@section('htmlheader_title')橋梁情報編集@endsection
@section('contentheader_title')橋梁情報編集@endsection
@section('previous_link')"{{ url('/buildings') }}"@endsection
@section('previous_page')橋梁@endsection
@section('current_page')編集@endsection

@section('main-content')
@include('error-notification')

<div class="box box-success">
    <div class="box-header with-border">
        <h2 class="box-title">橋梁情報編集</h2>
    </div>
    <div class="box-body">
        <!-- if there are creation errors, they will show here -->
        {!! Form::model($building, array('route' => array('buildings.update', $building->id), 'method' => 'PUT')) !!}
            <div class="form-group">
                {!! Form::label('project_name', '案件名') !!}
                {!! Form::text('project_name', null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('user_name', '担当者') !!}
                {!! Form::text('user_name', null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('user_id', 'user_id') !!}
                {!! Form::text('user_id', null, array('class' => 'form-control')) !!}
            </div>     
            <div class="form-group">
                {!! Form::label('status', 'status') !!}
                {!! Form::text('status', null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('b_data4', 'b_data4') !!}
                {!! Form::text('b_data4', null, array('class' => 'form-control')) !!}
            </div>        
            <div class="form-group">
                {!! Form::label('b_data5', 'b_data5') !!}
                {!! Form::text('b_data5', null, array('class' => 'form-control')) !!}
            </div>           
            <div class="form-group">
                {!! Form::label('b_data6', 'b_data6') !!}
                {!! Form::text('b_data6', null, array('class' => 'form-control')) !!}
            </div>       
            <div class="form-group">
                {!! Form::label('b_data7', 'b_data7') !!}
                {!! Form::text('b_data7', null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('b_data8', 'b_data8') !!}
                {!! Form::text('b_data8', null, array('class' => 'form-control')) !!}
            </div>       
            <div class="form-group">
                {!! Form::label('b_data9', 'b_data9') !!}
                {!! Form::text('b_data9', null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('user_name0', 'user_name0') !!}
                {!! Form::text('user_name0', null, array('class' => 'form-control')) !!}
            </div>        
            <div class="form-group">
                {!! Form::label('user_name1', 'user_name1') !!}
                {!! Form::text('user_name1', null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('user_name2', 'user_name2') !!}
                {!! Form::text('user_name2', null, array('class' => 'form-control')) !!}
            </div>        
            <div class="form-group">
                {!! Form::label('user_name3', 'user_name3') !!}
                {!! Form::text('user_name3', null, array('class' => 'form-control')) !!}
            </div>                
            <div class="form-group">
                {!! Form::label('user_name4', 'user_name4') !!}
                {!! Form::text('user_name4', null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('user_name5', 'user_name5') !!}
                {!! Form::text('user_name5', null, array('class' => 'form-control')) !!}
            </div>       
            <div class="form-group">
                {!! Form::label('user_name6', 'user_name6') !!}
                {!! Form::text('user_name6', null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('user_name7', 'user_name7') !!}
                {!! Form::text('user_name7', null, array('class' => 'form-control')) !!}
            </div>       
            <div class="form-group">
                {!! Form::label('user_name8', 'user_name8') !!}
                {!! Form::text('user_name8', null, array('class' => 'form-control')) !!}
            </div> 
            <div class="form-group">
                {!! Form::label('user_name9', 'user_name9') !!}
                {!! Form::text('user_name9', null, array('class' => 'form-control')) !!}
            </div>                 
            {!! Form::submit('更新', array('class' => 'btn btn-default')) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection

@extends('app')
@section('htmlheader_title')橋梁追加@endsection
@section('contentheader_title')橋梁追加@endsection
@section('previous_link')"{{ url('/buildings') }}"@endsection
@section('previous_page')橋梁@endsection
@section('current_page')追加@endsection

@section('main-content')
@include('error-notification')

<div class="box box-success">
    <div class="box-header with-border">
        <h2 class="box-title">橋梁追加</h2>
    </div>
    <div class="box-body">
        <!-- if there are creation errors, they will show here -->
            {!! Form::open(array('url' => 'buildings')) !!}
            <div class="form-group">
                {!! Form::label('project_name', '橋梁名称') !!}
                {!! Form::text('project_name', Input::old('project_name'), array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('user_name', '担当者') !!}
                {!! Form::text('user_name', Input::old('user_name'), array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('user_id', 'user_id') !!}
                {!! Form::text('user_id', Input::old('user_id'), array('class' => 'form-control')) !!}
            </div>     
            <div class="form-group">
                {!! Form::label('status', 'status') !!}
                {!! Form::text('status', Input::old('status'), array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('b_data4', 'b_data4') !!}
                {!! Form::text('b_data4', Input::old('b_data4'), array('class' => 'form-control')) !!}
            </div>        
            <div class="form-group">
                {!! Form::label('b_data5', 'b_data5') !!}
                {!! Form::text('b_data5', Input::old('b_data5'), array('class' => 'form-control')) !!}
            </div>           
            <div class="form-group">
                {!! Form::label('b_data6', 'b_data6') !!}
                {!! Form::text('b_data6', Input::old('b_data6'), array('class' => 'form-control')) !!}
            </div>       
            <div class="form-group">
                {!! Form::label('b_data7', 'b_data7') !!}
                {!! Form::text('b_data7', Input::old('b_data7'), array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('b_data8', 'b_data8') !!}
                {!! Form::text('b_data8', Input::old('b_data8'), array('class' => 'form-control')) !!}
            </div>       
            <div class="form-group">
                {!! Form::label('b_data9', 'b_data9') !!}
                {!! Form::text('b_data9', Input::old('b_data9'), array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('user_name0', 'user_name0') !!}
                {!! Form::text('user_name0', Input::old('user_name0'), array('class' => 'form-control')) !!}
            </div>        
            <div class="form-group">
                {!! Form::label('user_name1', 'user_name1') !!}
                {!! Form::text('user_name1', Input::old('user_name1'), array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('user_name2', 'user_name2') !!}
                {!! Form::text('user_name2', Input::old('user_name2'), array('class' => 'form-control')) !!}
            </div>        
            <div class="form-group">
                {!! Form::label('user_name3', 'user_name3') !!}
                {!! Form::text('user_name3', Input::old('user_name3'), array('class' => 'form-control')) !!}
            </div>                
            <div class="form-group">
                {!! Form::label('user_name4', 'user_name4') !!}
                {!! Form::text('user_name4', Input::old('user_name4'), array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('user_name5', 'user_name5') !!}
                {!! Form::text('user_name5', Input::old('user_name5'), array('class' => 'form-control')) !!}
            </div>       
            <div class="form-group">
                {!! Form::label('user_name6', 'user_name6') !!}
                {!! Form::text('user_name6', Input::old('user_name6'), array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('user_name7', 'user_name7') !!}
                {!! Form::text('user_name7', Input::old('user_name7'), array('class' => 'form-control')) !!}
            </div>       
            <div class="form-group">
                {!! Form::label('user_name8', 'user_name8') !!}
                {!! Form::text('user_name8', Input::old('user_name8'), array('class' => 'form-control')) !!}
            </div> 
            <div class="form-group">
                {!! Form::label('user_name9', 'user_name9') !!}
                {!! Form::text('user_name9', Input::old('user_name9'), array('class' => 'form-control')) !!}
            </div>                 
            {!! Form::submit('追加', array('class' => 'btn btn-default')) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection

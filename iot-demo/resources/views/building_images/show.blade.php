@extends('app')
@section('htmlheader_title')橋梁点検画像一覧@endsection
@section('contentheader_title')橋梁点検画像一覧@endsection
@section('previous_link')"{{ url('/building_images') }}"@endsection
@section('previous_page')橋梁点検画像一覧@endsection
@section('current_page')詳細@endsection

@section('main-content')
@include('error-notification')

<div class="box box-success">
    <div class="box-header with-border">
        <h2 class="box-title">橋梁点検写真</h2>
    </div>
    <div class="box-body">
        <p><a class="btn btn-default btn-md" href="{{ URL::to('images/create') }}"><i class="fa fa-cube"></i> イメージ追加</a></p>
        <div id="links" class="row">
            @forelse($images as $image)
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <a href="{{ asset('/uploads/' . $image->file) }}" title="タイトル：{{ $image->description }} EXIFデータ(GPS)：GPSLatitudeRef: N,-GPSLatitude: [35/1,48/1,986/100],GPSLongitudeRef: E,-GPSLongitude: [139/1,47/1,1953/100]" data-gallery><img src="{{asset('/uploads/' . $image->file)}}" width="160" alt="{{$image->description}}" style="margin-bottom:20px;"></a>            
                </div>
            @empty
            <!--<div class="row">
                <div class="alert alert-warning" role="alert"><ul><li>写真がまだありません</li></ul></div>
            </div>-->
            @endforelse
        </div>
    </div>
</div>
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
@endsection

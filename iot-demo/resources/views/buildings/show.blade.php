@extends('app')
@section('htmlheader_title')橋梁詳細@endsection
@section('contentheader_title')橋梁詳細@endsection
@section('previous_link')"{{ url('/buildings') }}"@endsection
@section('previous_page')橋梁@endsection
@section('current_page')詳細@endsection

@section('main-content')
@include('error-notification')

<div class="box box-success">
    <div class="box-header with-border">
        <h2 class="box-title">橋梁</h2>
    </div>
    <div class="box-body">
        <p><a class="btn btn-default btn-md" href="{{ URL::to('buildings/create') }}"><i class="fa fa-cube"></i> 橋梁追加</a>
        <a class="btn btn-default btn-md" href="{{ URL::to('buildings/' . $building->id . '/edit') }}"><i class="fa fa-pencil-square-o"></i> データ編集</a></p>
        <!--<table id="buildingShow" class="display table table-bordered table-stripe" cellspacing="0" width="100%">-->
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
                    <td>橋梁ＩＤ</td>
                    <td>{{ $building->id }}</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>橋梁名称</td>
                    <td>{{ $building->project_name }}</td>
                </tr>
                <tr>
                     <td>3</td>
                   <td>担当者</td>            
                    <td>{{ $building->user_name }}</td>
                </tr>
                <tr>
                     <td>4</td>
                   <td>作成日</td>            
                    <td>{{ $building->created_at }}</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>更新日</td>            
                    <td>{{ $building->status }}</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>データ#4</td>            
                    <td>{{ $building->b_data4 }}</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>データ#5</td>            
                    <td>{{ $building->b_data5 }}</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>データ#6</td>            
                    <td>{{ $building->b_data6 }}</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>データ#7</td>            
                    <td>{{ $building->b_data7 }}</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>データ#8</td>            
                    <td>{{ $building->b_data8 }}</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>データ#9</td>            
                    <td>{{ $building->b_data9 }}</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>データ#10</td>            
                    <td>{{ $building->user_name0 }}</td>
                </tr> 
                <tr>
                    <td>14</td>
                    <td>データ#11</td>            
                    <td>{{ $building->user_name1 }}</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>データ#12</td>            
                    <td>{{ $building->user_name2 }}</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>データ#13</td>            
                    <td>{{ $building->user_name3 }}</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>データ#14</td>            
                    <td>{{ $building->user_name4 }}</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>データ#15</td>            
                    <td>{{ $building->user_name5 }}</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>データ#16</td>            
                    <td>{{ $building->user_name6 }}</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>データ#17</td>            
                    <td>{{ $building->user_name9 }}</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>データ#18</td>            
                    <td>{{ $building->user_name8 }}</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>データ#19</td>            
                    <td>{{ $building->user_name9 }}</td>
                </tr>     
            </tbody>
        </table>
    </div>
</div>
@endsection

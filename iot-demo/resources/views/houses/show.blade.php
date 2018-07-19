@extends('app')
@section('htmlheader_title')案件詳細@endsection
@section('contentheader_title')案件詳細@endsection

@section('main-content')
@include('error-notification')

<div class="box box-warning">
    <div class="box-header with-border">
        <h2 class="box-title">ビルディング案件</h2>
    </div>
    <div class="box-body">
        <p><a class="btn btn-default btn-md" href="{{ URL::to('houses/create') }}"><i class="fa fa-cube"></i> 案件追加</a>
        <a class="btn btn-default btn-md" href="{{ URL::to('houses/' . $house->id . '/edit') }}"><i class="fa fa-pencil-square-o"></i> データ編集</a></p>
        <!--<table id="houseShow" class="display table table-bordered table-stripe" cellspacing="0" width="100%">-->
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
                    <td>案件番号</td>
                    <td>{{ $house->id }}</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>案件名称</td>
                    <td>{{ $house->project_name }}</td>
                </tr>
                <tr>
                     <td>3</td>
                   <td>担当者</td>            
                    <td>{{ $house->user_name }}</td>
                </tr>
                <tr>
                     <td>4</td>
                   <td>作成日</td>            
                    <td>{{ $house->created_at }}</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>更新日</td>            
                    <td>{{ $house->status }}</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>データ#4</td>            
                    <td>{{ $house->h_data4 }}</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>データ#5</td>            
                    <td>{{ $house->h_data5 }}</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>データ#6</td>            
                    <td>{{ $house->h_data6 }}</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>データ#7</td>            
                    <td>{{ $house->h_data7 }}</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>データ#8</td>            
                    <td>{{ $house->h_data8 }}</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>データ#9</td>            
                    <td>{{ $house->h_data9 }}</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>データ#10</td>            
                    <td>{{ $house->user_name0 }}</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>データ#11</td>            
                    <td>{{ $house->user_name1 }}</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>データ#12</td>            
                    <td>{{ $house->user_name2 }}</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>データ#13</td>            
                    <td>{{ $house->user_name3 }}</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>データ#14</td>            
                    <td>{{ $house->user_name4 }}</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>データ#15</td>            
                    <td>{{ $house->user_name5 }}</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>データ#16</td>            
                    <td>{{ $house->user_name6 }}</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>データ#17</td>            
                    <td>{{ $house->user_name9 }}</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>データ#18</td>            
                    <td>{{ $house->user_name8 }}</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>データ#19</td>            
                    <td>{{ $house->user_name9 }}</td>
                </tr>     
            </tbody>
        </table>
    </div>
</div>
@endsection

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<!--<script type="text/javascript">$(document).ready(function () {$('#buildingsDash').DataTable();});</script>
<script type="text/javascript">$(document).ready(function () {$('#housesDash').DataTable();});</script>
<script type="text/javascript">$(document).ready(function () {$('#mansionsDash').DataTable();});</script>
<script type="text/javascript">$(document).ready(function () {$('#buildingsIndex').DataTable();});</script>
<script type="text/javascript">$(document).ready(function () {$('#housesIndex').DataTable();});</script>
<script type="text/javascript">$(document).ready(function () {$('#mansionsIndex').DataTable();});</script>
<script type="text/javascript">$(document).ready(function () {$('#usersIndex').DataTable();});</script>
<script type="text/javascript">$(document).ready(function () {$('#buildingShow').DataTable();});</script>
<script type="text/javascript">$(document).ready(function () {$('#houseShow').DataTable();});</script>
<script type="text/javascript">$(document).ready(function () {$('#mansionShow').DataTable();});</script>
<script type="text/javascript">$(document).ready(function () {$('#userShow').DataTable();});</script>-->
<script type="text/javascript">$(document).ready(function () {$(".tableShow").dataTable({
    "oLanguage" : {
        "sProcessing":   "処理中...",
        "sLengthMenu":   "_MENU_ 件表示",
        "sZeroRecords":  "データはありません。",
        "sInfo":         "_START_件～_END_件を表示（全_TOTAL_ 件中）",
        "sInfoEmpty":    " 0 件中 0 から 0 まで表示",
        "sInfoFiltered": "（全 _MAX_ 件より抽出）",
        "sInfoPostFix":  "",
        "sSearch":       "検索フィルター:",
        "sUrl":          "",
        "oPaginate": {
            "sFirst":    "先頭",
            "sPrevious": "前ページ",
            "sNext":     "次ページ",
            "sLast":     "最終"
        }
    },
    "bProcessing":  true
});});</script>
<script src="{{ asset('/js/blueimp-gallery.min.js') }}"></script>
<script>document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};</script>
<script>blueimp.Gallery(
    document.getElementById('links').getElementsByTagName('a'),
    {
        container: '#blueimp-gallery-carousel',
        carousel: true
    }
);</script>
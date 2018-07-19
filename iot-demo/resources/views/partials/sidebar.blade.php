<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/a1.png')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle fa-lg text-success"></i>　オンライン</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="検索"/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">ナビゲーション</li>
            <!-- Optionally, you can add icons to the links -->
            <!--<li class="active"><a href="{{ url('/dashboard') }}"><i class='fa fa-dashboard'></i> <span>ダッシュボード</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-users'></i> <span>ユーザー管理</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">管理者プロフィール</a></li>
                    <li><a href="#">ユーザプロフィール</a></li>
                </ul>
            </li>
            -->
            <li class='active'><a href="{{ url('/dashboard') }}"><i class='fa fa-dashboard'></i> <span>ダッシュボード</span></a></li>
            <li class="treeview">
                <a href="{{ url('/dashboard') }}"><i class='fa fa-cube'></i><span>データ管理</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/buildings') }}">　　　橋梁</a></li>
                    <li><a href="{{ url('/houses') }}">　　　土構造物</a></li>
                    <li><a href="{{ url('/mansions') }}">　　　トンネル</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="{{ url('/dashboard') }}"><i class='fa fa-picture-o'></i><span>画像管理</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/building_images') }}">　　　橋梁</a></li>
                    <li><a href="{{ url('/house_images') }}">　　　土構造物</a></li>
                    <li><a href="{{ url('/mansion_images') }}">　　　トンネル</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/users/' . Auth::user()->id) }}"><i class='fa fa-user'></i> <span>プロフィール</span></a></li>
            <li><a href="{{ url('/users') }}"><i class='fa fa-users'></i> <span>ユーザー管理</span></a></li>
            <li><a href="#"><i class='fa fa-database'></i> <span>システム管理</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

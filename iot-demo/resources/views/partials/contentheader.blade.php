<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>@yield('contentheader_title')<small>@yield('contentheader_description')</small></h1>
    <ol class="breadcrumb">
        <li><a href=@yield('previous_link')><i class="fa fa-leaf"></i>@yield('previous_page')</a></li>
        <li class="active">@yield('current_page')</li>
    </ol>
</section>
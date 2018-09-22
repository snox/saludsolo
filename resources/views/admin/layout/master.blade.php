<!-- Header -->
@include('admin.layout._header')

<!-- Begin Sidebar -->
@include('admin.layout._sidebar')
<!-- End Sidebar -->

<!-- Begin Content -->
<div id="main-content">
    @yield('main_content')
</div>
<!-- End Content -->

<!-- Footer -->
@include('admin.layout._footer')
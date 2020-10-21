@include('admin.layouts.header')
@include('admin.layouts.navbar')
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      dashboard
      <small>control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li>dashboard</li>
    </ol>
  </section>

  <!-- Main content-->
  <section class="content">
    @include('admin.layouts.message')
    @yield('content')
  </section>
</div>

  @include('admin.layouts.footer')

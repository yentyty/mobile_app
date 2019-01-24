@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper" style="min-height: 901px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      HOME
      <small>* mobile store *</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red"><i class="icon fa fa-edit" style="padding-top:20px;"></i></span>
    
              <div class="info-box-content">
                <span class="info-box-text">News</span>
                <span class="info-box-number">1,410</span>
              </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow"><i class="fa fa-shopping-basket" style="padding-top:20px;"></i></span>
    
              <div class="info-box-content">
                <span class="info-box-text">Order</span>
                <span class="info-box-number">1,410</span>
              </div>
            </div>
        </div>
 {{-- /.col --}}
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-user-plus" style="padding-top:20px;"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Users</span>
            <span class="info-box-number">1,410</span>
          </div>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-comments-o" style="padding-top:20px;"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">COMMENTS</span>
            <span class="info-box-number">410</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
  </section>
  <!-- /.content -->
</div>
@endsection
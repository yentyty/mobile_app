@extends('admin.layouts.master')
@section('content')
      <div class="content-wrapper">
            <section class="content-header">
              <h1>
                List User
                <small>
                  Displays a list of all users</small>
              </h1>
            </section>
            <section class="content">
              <div class="row">
                <div class="col-md-12">
                  <div class="box">
                    <div class="box-header">
                            <h3 class="box-title">Responsive Hover Table</h3>
                            <div class="box-tools">
                              <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                                <div class="input-group-btn">
                                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                    <div class="box-body">
                      <table class="table table-bordered">
                        <tbody><tr>
                          <th style="width: 10px">#</th>
                          <th>User Name</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Gender</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          <td>1.</td>
                          <td>Admin</td>
                          <td>admin@gmail.com</td>
                          <td>Tam Kỳ</td>
                          <td>Nữ</td>
                          <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                      </tbody></table>
                    </div> 
                    <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                              <li><a href="#">«</a></li>
                              <li><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">»</a></li>
                            </ul>
                          </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
@endsection 
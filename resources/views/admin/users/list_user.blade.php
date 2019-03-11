@extends('admin.layouts.master')
@section('content')
 
<div class="content-wrapper">
  <section class="content-header">
      @if(count($errors) > 0)
          <div class="thongbao" style=" position: absolute; right: 14px;z-index: 3000;">
              @foreach($errors->all() as $err)
              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" style="margin-right: -10px;margin-top: -16px;">&times;</button>
                  <strong> {{ $err }} </strong>
              </div>
              @endforeach
          </div>
      @endif
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background-color:#20B2AA;">
              <i class="fa fa-plus-circle" aria-hidden="true"></i> Create User
            </button>
            <!-- The Modal -->
<!-- -------------------------------Create Users-------------------------------------------------------------------->
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h3 class="modal-title"><i class="fa fa-plus-square"></i> Create User<button type="button" class="close"
                        data-dismiss="modal">&times;</button></h3>
                  </div>
                  {{ Form::open([ 'action'=>'UserController@postThem','enctype'=>'multipart/form-data']) }}
                  <div class="box-body">
                    <div class="input-group input-group-sm">
                      {{ Form::label('username','User Name')}}<span style="color:red;">*</span>
                      {{ Form::text('username', '',['class' => 'form-control','placeholder'=>'Import User Name','style'=>'margin-bottom: 12px;'])}}
                      <div class="input-group-btn" style="padding-top:13px;">
                        <span class="btn btn-default"><i class="fa fa-user" aria-hidden="true"></i></span>
                      </div>
                    </div>
                    <div class="input-group input-group-sm">
                      {{ Form::label('name','Full Name')}}<span style="color:red;">*</span>
                      {{ Form::text('name', '',['class' => 'form-control','placeholder'=>'Import Name','style'=>'margin-bottom: 12px;'])}}
                      <div class="input-group-btn" style="padding-top:13px;">
                        <span class="btn btn-default"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                      </div>
                    </div>
                    <div class="input-group input-group-sm">
                      {{ Form::label('birthday','Birthday')}}
                      {{ Form::date('birthday', '',['class' => 'form-control','placeholder'=>'Import Birthday','style'=>'margin-bottom: 12px;'])}}
                      <div class="input-group-btn" style="padding-top:13px;">
                        <span class="btn btn-default"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i></span>
                      </div>
                    </div>
                    <div class="input-group input-group-sm">
                      {{ Form::label('phone','Phone')}}<span style="color:red;">*</span>
                      {{ Form::text('phone','',['class'=>'form-control','placeholder'=>'Import phone', 'style'=>'margin-bottom: 12px;'])}}
                      <div class="input-group-btn" style="padding-top:13px;">
                        <span class="btn btn-default"><i class="fa fa-phone" aria-hidden="true"></i></span>
                      </div>
                    </div>
                    <div class="input-group input-group-sm">
                      {{ Form::label('email','Email') }}<span style="color:red;">*</span>
                      {{ Form::email('email','',['class'=>'form-control','placeholder'=>'Import Email', 'style'=>'margin-bottom: 12px;']) }}
                      <div class="input-group-btn" style="padding-top:13px;">
                        <span class="btn btn-default"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                      </div>
                    </div>
                    <div class="input-group input-group-sm">
                      {{ Form::label('address','Address') }}<span style="color:red;">*</span>
                      {{ Form::text('address','',['class'=>'form-control','placeholder'=>'Import Address','style'=>'margin-bottom: 12px;']) }}
                      <div class="input-group-btn" style="padding-top:13px;">
                        <span class="btn btn-default"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                      </div>
                    </div>
                    <div class="input-group input-group-sm">
                      {{ Form::label('password','Password') }}<span style="color:red;">*</span>
                      {{ Form::password('password',['class'=>'form-control','placeholder'=>'Import Password','style'=>'margin-bottom: 12px;']) }}
                      <div class="input-group-btn" style="padding-top:13px;">
                        <span class="btn btn-default"><i class="fa fa-lock" aria-hidden="true"></i> </span>
                      </div>
                    </div>
                    <div class="input-group input-group-sm" style="margin-bottom: 12px;">
                      {{ Form::password('passwordAgain',['class'=>'form-control','placeholder'=>'Retype Password']) }}
                      <div class="input-group-btn">
                        <span class="btn btn-default"><i class="fa fa-lock" aria-hidden="true"></i></span>
                      </div>
                    </div>
                    <div class="input-group input-group-sm">
                      {{ Form::label('role','Role') }}<span style="color:red;">*</span><br>
                      {{ Form::select('role_id', $role->pluck('name','role_id'), null,['class' => 'form-control select2','style'=>'margin-bottom: 12px;']) }}
                      <div class="input-group-btn" style="padding-top:13px;">
                        <span class="btn btn-default"><i class="fa fa-users" aria-hidden="true"></i></span>
                      </div>
                    </div>
                    <div class="input-group input-group-sm">
                      {{ Form::label('namegender','Gender') }}
                      <div class="form-check">
                        <label style="padding-left:25px;">
                          {{ Form::radio('gender','1','true') }} Male
                        </label>
                        <label style="padding-left:25px;">
                          {{ Form::radio('gender','2') }} Female
                        </label>
                      </div>
                    </div>
                    <div class="input-group input-group-sm">
                      {{ Form::label('avatar','Avatar',['for'=>'exampleInputFile']) }}
                      <div>
                        <img src="" width="150" height="150" alt="Ảnh đại diện" id="avatar" style="display: none">
                        {{ Form::file('avatar',['class'=>'file','style'=>'margin-bottom:12px;']) }}
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
                    {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  </div>
                  {{ Form::close() }}
                </div>
              </div>
            </div>
<!-- -------------- List Users --------------------------------------------------------------------------- -->
            <div class="box-tools">
              {{ Form::open([ 'action'=>'UserController@getSearch']) }}
                <div class="input-group input-group-sm" style="width: 150px;">
                  {{ Form::text('table_search','',['class'=>'form-control pull-right','placeholder'=>'Search']) }}
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              {{ Form::close() }}
            </div>
          </div>
          <div class="box-body">
            <table class="table table-bordered" style="font-size:15px;text-align: center;">
              <tbody>
                <tr>
                  <th style="width: 10px;text-align: center;">#</th>
                  <th style="text-align: center;">UserName</th>
                  <th style="text-align: center;">Email</th>
                  <th style="text-align: center;">Role</th>
                  <th style="text-align: center;">Avatar</th>
                  <th style="text-align: center;">Action</th>
                </tr>
                @foreach($users as $item => $user)
                <tr>
                  <td>{{ $item }}</td>
                  <td>{{ $user['username'] }}</td>
                  <td>{{ $user['email'] }}</td>
                  <td>
                    <?php $role = DB::table('roles')->where('role_id',$user["role_id"])->first(); ?>
                    @if(!empty($role->name))
                    {{ $role->name }}
                    @endif
                  </td>
                  <td>
                    @if(!empty($user->avatar))
                    <img width="60px" src="admin/avatar/{{$user->avatar}}">
                    @endif
                  </td>
                  <td>
                    <a href="admin/user/list_user/{{ $user->user_id }}" class="btn btn-primary" data-toggle="modal" data-target="#myModa{{ $user->user_id }}" style="background-color:#20B2AA;"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                    <a href="admin/user/list_user/{{ $user->user_id }}" class="btn btn-warning" data-toggle="modal" data-target="#myModal{{ $user->user_id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a href="javascript:;" class="btn btn-danger"onclick="if(confirm('Bạn có chắc chắn muốn xóa')){location.href='admin/user/listuser/{{$user->user_id}}'}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  </td>
                </tr>
<!-- -- -------------------DETAIL USERS----------------------------------------------------------- -- -->
                <div class="modal" id="myModa{{ $user->user_id }}">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="row">
                        <div class="col-md-12 lead" style="padding-top:10px;padding-left:37px;font-weight:bold;margin-bottom: -20px;">User
                          profile<button type="button" class="close" data-dismiss="modal" style="padding-right:20px;">&times;</button>
                          <hr>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4 text-center">
                            @if(!empty($user->avatar))
                          <img class="avatar" style="vertical-align: middle; width:150px; height:150px; border-radius:50%; margin-top: 35px;" src="admin/avatar/{{$user->avatar}}">
                            @endif
                        </div>
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-12">
                              <h1 class="only-bottom-margin"><em>{{$user['name']}}</em></h1>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <span class="text-muted">User Name: </span>{{$user['username']}}<br>
                              <span class="text-muted">Email: </span>{{$user['email']}}<br>
                              <span class="text-muted">Phone: </span>{{$user['phone']}}<br>
                              <span class="text-muted">Birth date: </span> {{$user['birthday']}}<br>
                              <span class="text-muted">Address: </span> {{$user['address']}}<br>
                              <span class="text-muted">Gender: </span>@if($user->gender == 0)Nữ @else Nam @endif<br>
                              <span class="text-muted" style="font-weight:bold;color:#333;">
                                  <?php $role = DB::table('roles')->where('role_id',$user["role_id"])->first(); ?>
                                  @if(!empty($role->name)){{
                                  $role->name }}@endif
                                   <br><br></span>
                              <small class="text-muted">Created: {{$user['created_at']}}</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
<!-- --------------------------------------------Update User -------------------------------------------------- -->
              <!-- The Modal -->
              <div class="modal" id="myModal{{ $user->user_id }}">
                  <div class="modal-dialog">
                    <div class="modal-content">
                    
                      <!-- Modal Header -->
                      <div class="modal-header">
                          <h3 class="modal-title"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update User<button type="button" class="close"
                              data-dismiss="modal">&times;</button></h3>
                        </div>
                        {{ Form::open([ 'action'=>['UserController@postUpdate',$user->user_id],'enctype'=>'multipart/form-data']) }}
                        <div class="box-body">

                          <div class="input-group input-group-sm">
                            {{ Form::label('username','User Name')}}<span style="color:red;">*</span>
                            {{ Form::text('username',$user->username,['class' => 'form-control','placeholder'=>'Import User Name','style'=>'margin-bottom: 12px;'])}}
                            <div class="input-group-btn" style="padding-top:13px;">
                              <span class="btn btn-default"><i class="fa fa-user" aria-hidden="true"></i></span>
                            </div>
                          </div>
                          <div class="input-group input-group-sm">
                            {{ Form::label('name','Full Name')}}<span style="color:red;">*</span>
                            {{ Form::text('name', $user->name,['class' => 'form-control','placeholder'=>'Import Name','style'=>'margin-bottom: 12px;'])}}
                            <div class="input-group-btn" style="padding-top:13px;">
                              <span class="btn btn-default"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                            </div>
                          </div>
                          <div class="input-group input-group-sm">
                            {{ Form::label('birthday','Birthday')}}
                            {{ Form::date('birthday', $user->birthday,['class' => 'form-control','placeholder'=>'Import Birthday','style'=>'margin-bottom: 12px;'])}}
                            <div class="input-group-btn" style="padding-top:13px;">
                              <span class="btn btn-default"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i></span>
                            </div>
                          </div>
                          <div class="input-group input-group-sm">
                            {{ Form::label('phone','Phone')}}<span style="color:red;">*</span>
                            {{ Form::text('phone',$user->phone,['class'=>'form-control','placeholder'=>'Import phone', 'style'=>'margin-bottom: 12px;'])}}
                            <div class="input-group-btn" style="padding-top:13px;">
                              <span class="btn btn-default"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            </div>
                          </div>
                          <div class="input-group input-group-sm">
                            {{ Form::label('email','Email') }}<span style="color:red;">*</span>
                            {{ Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'Import Email', 'style'=>'margin-bottom: 12px;']) }}
                            <div class="input-group-btn" style="padding-top:13px;">
                              <span class="btn btn-default"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            </div>
                          </div>
                          <div class="input-group input-group-sm">
                            {{ Form::label('address','Address') }}<span style="color:red;">*</span>
                            {{ Form::text('address',$user->address,['class'=>'form-control','placeholder'=>'Import Address','style'=>'margin-bottom: 12px;']) }}
                            <div class="input-group-btn" style="padding-top:13px;">
                              <span class="btn btn-default"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            </div>
                          </div>
                          <div class="input-group input-group-sm">
                            {{ Form::checkbox('changePassword','',false,['class'=>'changePassword']) }}
                            {{ Form::label('password','Password') }}<span style="color:red;">*</span>
                            {{ Form::password('password',['class'=>'form-control password','placeholder'=>'Import Password','style'=>'margin-bottom: 12px;','disabled'=>'']) }}
                            <div class="input-group-btn" style="padding-top:13px;">
                              <span class="btn btn-default"><i class="fa fa-lock" aria-hidden="true"></i> </span>
                            </div>
                          </div>
                          <div class="input-group input-group-sm" style="margin-bottom: 12px;">
                            {{ Form::password('passwordAgain',['class'=>'form-control password','placeholder'=>'Retype Password','disabled'=>'']) }}
                            <div class="input-group-btn">
                              <span class="btn btn-default"><i class="fa fa-lock" aria-hidden="true"></i></span>
                            </div>
                          </div>
                          <div class="input-group input-group-sm">
                              {{ Form::label('role','Role') }}<span style="color:red;">*</span><br>
                              {{ Form::select('role_id', \Mobile\Role::pluck('name','role_id'), $user->role_id,['class' => 'form-control select2','style'=>'margin-bottom: 12px;']) }}
                              <div class="input-group-btn" style="padding-top:13px;">
                                <span class="btn btn-default"><i class="fa fa-users" aria-hidden="true"></i></span>
                              </div>
                            </div>
                          <div class="input-group input-group-sm">
                            {{ Form::label('namegender','Gender') }}
                            
                            <div class="form-check">
                              @if($user->gender == 1)
                              <label style="padding-left:25px;">
                                {{ Form::radio('gender','1',true) }} Male
                              </label>
                              <label style="padding-left:25px;">
                                {{ Form::radio('gender','2',false) }} Female
                              </label>
                              @else
                              <label style="padding-left:25px;">
                                  {{ Form::radio('gender','1',false) }} Male
                                </label>
                                <label style="padding-left:25px;">
                                  {{ Form::radio('gender','2',true) }} Female
                                </label>
                                @endif
                            </div>
                          </div>
                    
                          <div class="input-group input-group-sm">
                            {{ Form::label('avatar','Avatar',['for'=>'exampleInputFile']) }}
                            <div>
                              @if(!empty($user->avatar))
                              <img src="admin/avatar/{{$user->avatar}}" height="150" width="150px" alt="Ảnh đại diện" id="avatarup">
                              @else
                              <img src="" width="150" height="150" alt="Ảnh đại diện" id="avatarup" style="display: none">
                              @endif
                                <input type="file" class="fileup" id="exampleInputFile" name="avatar" value="{{ old('avatar', isset($user) ? $user->avatar : '') }}">
                              <!-- {{  Form::file('avatar',['class'=>'fileup','style'=>'margin-bottom:12px;']) }} -->
                            </div>
                          </div>
                        </div>
                        <div class="box-footer">
                          {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                        {{ Form::close() }}
                    </div>
                  </div>
                </div>
                @endforeach
              </tbody>
            </table>
          </div>
        
<!-- -- --------------------Phan Trang------------------------------------------------------------------- -- -->
          <div style="float:right;" >
              {{ $users->links() }}
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
@section('script')
    @parent
    <script>
        $(document).ready(function () {
            $(".changePassword").change(function () {
              var parent = $( this ).parent();
              var next = parent.next();
              var child = next.children( "input[name='passwordAgain']" )
                if ($(this).is(":checked")) {
                  $(this).siblings("input[name='password'], input[name='passwordAgain']").removeAttr('disabled');
                  child.removeAttr('disabled');
                } 
                else {
                  $(this).siblings("input[name='password'], input[name='passwordAgain']").attr('disabled','');
                  child.attr('disabled','');
                }    
            });

          function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#avatar').attr('src', e.target.result).show();
                }
                reader.readAsDataURL(input.files[0]);
              }
            }
            $(".file").change(function() {  
            readURL(this);
          });

          function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#avatarup').attr('src', e.target.result).show();
                }
                reader.readAsDataURL(input.files[0]);
              }
            }
            $(".fileup").change(function() {  
            readURL(this);
          });

           $("div.thongbao").delay(5000).slideUp();
        });

    </script>    
@endsection
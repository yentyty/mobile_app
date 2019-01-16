@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper" style="min-height: 946px;">
        <section class="content-header">
          <h1>
            Create User
            <small>Preview</small>
          </h1>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                {{ Form::open(['url'=>'admin/home']) }}
                  <div class="box-body">
                    <div class="form-group">
                      {{ Form::label('name','User Name') }}
                      {{ Form::text('username', '',['class' => 'form-control','placeholder'=>'Nhập User Name'])}}
                    </div>
                    <div class="form-group">
                     {{ Form::label('phone','Phone')}}
                     {{ Form::text('phone','',['class'=>'form-control','placeholder'=>'Nhập phone'])}}
                    </div>
                    <div class="form-group">
                      {{Form::label('email','Email')}}
                     {{Form::email('email','',['class'=>'form-control','placeholder'=>'Nhập Email'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('address','Address')}}
                        {{Form::text('address','',['class'=>'form-control','placeholder'=>'Nhập Address'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('password','Password')}}
                        {{Form::password('password',['class'=>'form-control','placeholder'=>'Nhập Password'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('gender','Gender')}}
                        <div class="form-check">
                            <label style="padding-left:25px;"> 
                                {{Form::radio('gender','male')}}Male
                            </label>
                            <label style="padding-left:25px;"> 
                                {{Form::radio('gender','female')}}Female
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                        <a href="" class="btn btn-warning" style="margin-left: 30px;">Cancel</a>
                    </div>
                  </div>
                {{ Form::close() }}            
              </div>
            </div>
          </div>
        </section>
</div>
@endsection
@extends('layouts.backend.layouts.main')

@section('content')
    <div class="admin-wrapper">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Create admin</h2>
                        <div class="nav navbar-right panel_toolbox">
                            <a class="btn_custom bg_grey" href="{{route('admin.index')}}">Back</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <div class="x_content">
                            <form action="{{route('admin.store')}}" class="form-horizontal form-label-left" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Name <span class="required color_red ">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="name" value="" type="text" class="form-control"
                                               placeholder="Enter your name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Email<span class="required color_red ">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="email" value="" type="text" class="form-control"
                                               placeholder="Enter your email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required color_red ">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="password" value="" type="password" class="form-control"
                                               placeholder="Enter your password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Role_type<span class="required color_red ">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select name="role_type" class="form-control">
                                            <option>Choose option</option>
                                            @foreach(getConfig('role_type_admin') as $key => $value)
                                                <option value="{{$key}}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn_custom">Submit</button>
                                        <a class="btn_custom bg_grey" href="{{route('admin.index')}}">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
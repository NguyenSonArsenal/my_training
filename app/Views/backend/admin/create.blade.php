@extends('layouts.backend.layouts.main')

@section('content')
    <div class="admin-wrapper">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Create admin</h2>
                        <div class="nav navbar-right panel_toolbox">
                            <a class="btn_custom " href="{{route('admin.index')}}">Back</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <div class="table-responsive">
                            <span>Form create admin in here</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
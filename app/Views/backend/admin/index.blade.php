@extends('layouts.backend.layouts.main')

@section('content')
    <div class="admin-wrapper">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List admin</h2>
                        <div class="nav navbar-right panel_toolbox">
                            <a class="btn_custom" href="{{route('admin.create')}}">Add</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="list-admin table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th class="column-title">Id </th>
                                        <th class="th_name column-title">Name </th>
                                        <th class="th_email column-title">Email </th>
                                        <th class="th_avatar column-title">Avatar </th>
                                        <th class="th_role column-title">Role_type </th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($entities as $entity)
                                        <tr class="tr_admin even pointer">
                                            <td>{{ $entity->id }}</td>
                                            <td>{{ $entity->name }} </td>
                                            <td>{{ $entity->email }} </td>
                                            <td>{{ $entity->avatar }}</td>
                                            <td>{{ $entity->role_type }}</td>
                                            <td>
                                                <a class="btn_custom_action" href="">View</a>
                                                <a class="btn_custom_action btn_view" href="">Edit</a>
                                                <a class="btn_custom_action btn_del" href="">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
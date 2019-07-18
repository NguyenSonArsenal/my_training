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
                                        <th class="th_role column-title">Created_by </th>
                                        <th class="th_role column-title">Updated_by </th>
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
                                            <td>{{ $entity->getRoleTypeAlias() }}</td>
                                            <td>{{ $entity->getInsertUpdateId($entity->ins_id) }}</td>
                                            <td>{{ $entity->getInsertUpdateId($entity->upd_id) }}</td>
                                            <td>
                                                <a class="btn_custom_action" href="">View</a>
                                                <a class="btn_custom_action btn_view" href="{{route('admin.edit', ['id' => $entity->getKey()])}}">Edit</a>
                                                <form action="{{route('admin.destroy', $entity->id)}}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn_custom_action btn_del">Delete</button>
                                                </form>
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
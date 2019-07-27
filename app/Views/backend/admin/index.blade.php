@extends('layouts.backend.layouts.main')

@section('content')
    <div class="admin-wrapper">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                @include('layouts.backend.elements._notification')

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
                                    <th class="column-title">Id</th>
                                    <th class="th_name column-title">Name</th>
                                    <th class="th_email column-title">Email</th>
                                    <th class="th_avatar column-title">Avatar</th>
                                    <th class="th_role column-title">Role_type</th>
                                    <th class="th_role column-title">Created_by</th>
                                    <th class="th_role column-title">Updated_by</th>
                                    <th class="column-title no-link last"><span class="nobr">Action</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($entities as $entity)
                                    <tr class="tr_admin even pointer">
                                        <td>{{ $entity->id }}</td>
                                        <td>
                                            <a href="{{route('admin.show', ['id' => $entity->getKey()])}}">{{ $entity->name }} </a>
                                        </td>
                                        <td>{{ $entity->email }} </td>
                                        <td>{{ $entity->avatar }}</td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-xs {{$entity->isSuperAdmin() ? 'btn-success' : 'btn-info'}}">
                                                {{ $entity->getRoleTypeAlias()}}</button>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.show', ['id' => $entity->ins_id])}}">
                                                {{ $entity->getInsertUpdateId($entity->ins_id) }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.show', ['id' => $entity->upd_id])}}">
                                                {{ $entity->getInsertUpdateId($entity->upd_id) }}
                                            </a>
                                        </td>
                                        <td>
                                            <ul class="list-action">
                                                <li>
                                                    <a class="btn_show btn_custom_action"
                                                       href="{{route('admin.show', ['id' => $entity->getKey()])}}">View</a>
                                                </li>

                                                <li>
                                                    @if($entity->allowEdited())
                                                        <a class="bg_green btn_custom_action"
                                                           href="{{route('admin.edit', ['id' => $entity->getKey()])}}">Edit</a>
                                                    @endif
                                                </li>

                                                <li>
                                                    @if($entity->allowDeleted())
                                                        <button name="delete"
                                                                data-form-action="{{ route('admin.destroy', $entity->id) }}"
                                                                type="submit" class="btn_custom_action bg_grey">Delete
                                                        </button>
                                                    @endif
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{ $entities->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
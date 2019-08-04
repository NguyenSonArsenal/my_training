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
                            <a class="btn_custom" href="{{route('post.create')}}">Add</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <!-- From search -->
                    <form method="GET" action="{{route('post.index')}}" class="search-admin form-horizontal">
                        <input placeholder="Enter name" class="input form-control" name="name" type="search"
                               value="{{request('name', '')}}">
                        <button class="btn_custom" href="javascript:void(0)">Search</button>
                    </form>

                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="list-admin table table-striped jambo_table bulk_action">
                                <thead>
                                <tr class="headings">
                                    <th class="column-title">
                                        <a href="{{appendStringSort('id')}}" class="link_sort">Id</a>
                                    </th>
                                    <th class="th_name column-title">Title</th>
                                    <th class="th_email column-title">Description</th>
                                    <th class="th_role column-title">Status</th>
                                    <th class="th_avatar column-title">Author</th>
                                    <th class="th_name column-title">Updated_by</th>
                                    <th class="th_time column-title">
                                        <a href="{{appendStringSort(getSystemConfig('created_at_column'))}}"
                                           class="link_sort">Created_at</a>
                                    </th>
                                    <th class="th_time column-title">
                                        <a href="{{appendStringSort(getSystemConfig('updated_at_column'))}}"
                                           class="link_sort">Updated_at</a>
                                    </th>
                                    <th class="column-title no-link last"><span class="nobr">Action</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($entities as $entity)
                                    <tr class="tr_admin even pointer">
                                        <td>{{ $entity->id }}</td>
                                        <td>{{ $entity->title }}</td>
                                        <td>{{ $entity->description }}</td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-xs {{$entity->isActive() ? 'btn-success' : 'btn-info'}}">
                                                {{ $entity->getPostStatus()}}</button>
                                        </td>
                                        <td>
                                            <a href="{{route('post.show', ['id' => $entity->ins_id])}}">
                                                {{ $entity->getInsertUpdateId($entity->ins_id) }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('post.show', ['id' => $entity->upd_id])}}">
                                                {{ $entity->getInsertUpdateId($entity->upd_id) }}
                                            </a>
                                        </td>
                                        <td> {{ $entity->getCreatedAt() }}</td>
                                        <td> {{ $entity->getUpdatedAt() }}</td>
                                        <td>
                                            <ul class="list-action">
                                                <li>
                                                    <a class="btn_show btn_custom_action"
                                                       href="{{addBackUrl(route('post.show', ['id' => $entity->getKey()]))}}">View</a>
                                                </li>

                                                <li>
                                                    <a class="bg_green btn_custom_action"
                                                       href="{{addBackUrl(route('post.edit', ['id' => $entity->getKey()]))}}">Edit</a>
                                                </li>

                                                <li>
                                                    <button name="delete"
                                                            data-form-action="{{ route('post.destroy', $entity->id) }}"
                                                            type="submit" class="btn_custom_action bg_grey">Delete
                                                    </button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{ $entities->appends($_GET)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
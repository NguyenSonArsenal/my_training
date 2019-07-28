<div class="admin-wrapper">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Detail admin</h2>
                    <div class="nav navbar-right panel_toolbox">
                        <a class="btn_custom bg_grey" href="{{backUrl(route('admin.index'))}}">Back</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content form-detail-confirm-admin">
                    <div class="x_content">
                        <form action="{{$entity->getActionFormStoreUpdate('admin')}}" class="form-horizontal form-label-left" method="POST">
                            @csrf
                            @method($entity->getMethodFormStoreUpdate())

                            <div class="form-group">
                                <label class="text-right col-md-3 col-sm-3 col-xs-12">Name</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <span>{{getValueInputText($entity->name)}}</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-right col-md-3 col-sm-3 col-xs-12">Email</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <span>{{getValueInputText($entity->email)}}</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-right col-md-3 col-sm-3 col-xs-12">Password</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <span>********</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-right col-md-3 col-sm-3 col-xs-12">Role_type</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <span>{{$entity->getRoleTypeAlias()}}</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-right col-md-3 col-sm-3 col-xs-12">Created by</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <span>{{ $entity->getInsertUpdateId($entity->ins_id) }}</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-right col-md-3 col-sm-3 col-xs-12">Updated by</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <span>{{ $entity->getInsertUpdateId($entity->upd_id) }}</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-right col-md-3 col-sm-3 col-xs-12">Created at</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <span>{{ $entity->getCreatedAt() }}</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-right col-md-3 col-sm-3 col-xs-12">Updated at</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <span>{{ $entity->getUpdatedAt() }}</span>
                                </div>
                            </div>

                            <div class="ln_solid"></div>

                            <div class="form-group">
                                <label class="text-right col-md-3 col-sm-3 col-xs-12">
                                    @if ($entity->allowEdited())
                                        <a class="btn_custom" href="{{backUrl(route('admin.edit', ['id' => $entity->getKey()]))}}">Edit</a>
                                    @endif
                                </label>
                                <label class="text-left col-md-3 col-sm-3 col-xs-12">
                                    <a class="btn_custom bg_grey" href="{{backUrl(route('admin.index'))}}">Back</a>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
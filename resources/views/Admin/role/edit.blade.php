@extends('layouts.Admin_app');

@section('icerik')

    <form class="form-horizontal" method="post"
          action="{{ URL::route('role.update',['id'=>$role->id]) }}">

    {{csrf_field()}}


<div class="content-box-large box-with-header">
    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title">Rol Güncelleme</div>

            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Rol Adı</label>
                <div class="col-sm-10">
                    <input type="textbox" class="form-control" id="inputEmail3" name="name" placeholder="Name"  value="{{$role->name}}">
                </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Görüntü Adı</label>
                    <div class="col-sm-10">
                        <input type="textbox" class="form-control" id="inputEmail3" name="display_name" placeholder="display_name"  value="{{$role->display_name}}">
                    </div>
                </div>
            <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Açıklama</label>
                        <div class="col-sm-10">
                            <input type="textbox" class="form-control" id="inputEmail3" name="description" placeholder="Description"  value="{{$role->description}}">
                        </div>
                    </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Açıklama</label>
                <div class="col-sm-10">

                    @foreach($permissions as $permission)
                        <input type="checkbox" {{in_array($permission->id,$role_permissions)?"checked":""}}  class="form-control"  name="permission[]" value="{{$permission->id}}" > {{$permission->name}} <br>
                    @endforeach
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Kaydet</button>

                </div>
            </div>
            </div>
        </div>
    </div>
</div>





    </form>

@endsection

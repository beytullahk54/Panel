
@extends('layouts.Admin_app');

@section('icerik')
    <div class="white-box">
        <form class="form-horizontal" method="post"
              action="{{ URL::asset('admin/role/store') }}">

            {{csrf_field()}}


        <div class="content-box-large box-with-header">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Rol Ekleme</div>

                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Rol Adı</label>
                        <div class="col-sm-10">
                            <input type="textbox" class="form-control" id="inputEmail3" name="name" placeholder="Rol Adı">
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Görüntü Adı</label>
                            <div class="col-sm-10">
                                <input type="textbox" class="form-control" id="inputEmail3" name="display_name" placeholder="Rol Görüntü Adı">
                            </div>
                        </div>
                    <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Açıklama</label>
                                <div class="col-sm-10">
                                    <input type="textbox" class="form-control" id="inputEmail3" name="description" placeholder="Açıklama">
                                </div>
                            </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Açıklama</label>
                        <div class="col-sm-10">
                            @foreach($permissions as $permission)
                            <input type="checkbox" class="form-control" name="permission[]" value="{{$permission->id}}">{{$permission->name}}
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




        </form>
    </div>


@endsection

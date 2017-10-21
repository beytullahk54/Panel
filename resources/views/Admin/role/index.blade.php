@extends('layouts.Admin_app');

@section('icerik')
    <div class="white-box">
        <h2>Rol Sayfası</h2>
        <a class="btn btn-success" href="{{URL::asset('admin/role/create')}}">Role Oluştur</a>
            <table class="table">
                <tr>
                    <th>Adı</th>
                    <th>Görüntü Adı</th>
                    <th>Açıklama</th>
                </tr>
                @forelse($roles as $role)
                    <tr>
                        <td>{{$role->name}}</td>
                        <td>{{$role->display_name}}</td>
                        <td>{{$role->description}}</td>
                        <td><a class="btn btn-info btn-sm" href="{{URL::route('role.edit',['id'=>$role->id])}}">Edit</a>
                            <a href="{{ URL::route('role.destroy',['id'=>$role->id]) }}" type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i>Sil </a>

                        </td>
                    </tr>
                    @empty
                    <tr><td>No role</td></tr>
                    @endforelse
            </table>
    </div>
@endsection
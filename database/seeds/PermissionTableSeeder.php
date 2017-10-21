<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$permissions=[

			['name'=>'ogrenci-ekle',
			 'display_name'=>'ogrenci ekleyebilir',
			 'description'=>'oğrenci ekleyebilir'
			],
			['name'=>'ogrenci-sil',
			 'display_name'=>'ogrenci silebilir',
			 'description'=>'Öğrenci silme yetkisine sahip'
			],
			['name'=>'ogrenci-duzenle',
			 'display_name'=>'ogrenci duzenle',
			 'description'=>'Öğrenci bilgilerini düzenleyebilir'
			],
			['name'=>'ogrenci-gor',
			 'display_name'=>'ogrencileri gorme',
			 'description'=>'Öğrenci bilgilerini görme yetkisine sahip'
			],
			['name'=>'ders-ekle',
			 'display_name'=>'Ders Ekle',
			 'description'=>'Ders Ekleyebilir'
			],
			['name'=>'ders-sil',
			 'display_name'=>'Ders Silebilir',
			 'description'=>'Ders Silebilir'
			],
			['name'=>'ders-duzenle',
			 'display_name'=>'Ders Duzenle',
			 'description'=>'Ders Bilgilerini düzenleyebilir'
			],
			['name'=>'role',
			 'display_name'=>'Role yetkisi',
			 'description'=>'Role ile ilgili tüm yetkilere sahip'
			],

			['name'=>'kullanici-rol',
			 'display_name'=>'Rol verebilir',
			 'description'=>'Kullanıcılara rol verebilir'
			],
			['name'=>'ogrenci',
			 'display_name'=>'Öğrenci',
			 'description'=>'Öğrenci'
			],


		];
		$roles=[

			['name'=>'admin',
			 'display_name'=>'admin',
			 'description'=>'admin'
			],
			['name'=>'kullanici',
			 'display_name'=>'kullanici',
			 'description'=>'kullanici'
			]


		];

		foreach ($permissions as $key=>$value){
			Permission::create($value);
		}
		foreach ($roles as $key=>$value){
			Role::create($value);
		}

		DB::insert('insert into role_user (user_id, role_id) values (?, ?)', [1, 1]);
		DB::insert('insert into role_user (user_id, role_id) values (?, ?)', [2, 2]);

		$permission=1;
		while($permission<=9){
			DB::insert('insert into permission_role (role_id, permission_id) values (?, ?)', [1, $permission]);
			$permission++;
		}
		DB::insert('insert into permission_role (role_id, permission_id) values (?, ?)', [2, 10]);


	}
}

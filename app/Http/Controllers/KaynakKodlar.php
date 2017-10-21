<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaynakKodlar extends Controller
{

//Yardımcı Kaynaklar



	/*
	 *
	    *Kütüphaneler
	                use Illuminate\Support\Facades\Auth;//Kullanıcı işlemleri için
					use Illuminate\Http\Request;//Post get işlemleri
					use Illuminate\Support\Facades\DB; //Db sorguları için
					use Session;//Oturum işlemleri

		* Create

				$kaydet = User::create(array(
					'email' => $Ogr_Kullanici_Id,
					'password' =>  bcrypt($Password)
				));

				DB::insert('insert into role_user (user_id, role_id) values (?, ?)', [$Id, '2']); //Öğrenciye Öğrenci rolü Ekleme


		* Update

				$Ogrenci =
				ogrenci::where('User_Id', '=', $Id)
					   ->update(array(
						   'Ogr_Ad' => $request->Name,
						   'Ogr_Soyad' => $request->Ogr_Soyad,
						   'Tel_No' => $request->Tel_No,
						   'Dogum_Tarih' => $request->Dogum_Tarih,
						   'Adres' => $request->Adres,
						   'Tc_No' => $request->Tc_No,
						   'Bolum_Id' => $request->Bolum_Id,
						   'Ogr_DogumYeri' => $request->Ogr_DogumYeri,
						   'Ogr_EgitimSeviye' => $request->Ogr_EgitimSeviye,
						   'Ogr_BabaAdi' => $request->Ogr_BabaAdi,
						   'Ogr_Meslek' => $request->Ogr_Meslek,
						   'Email' => $request->Email
					   ));//Email Alanını Öğrenciler Tablosuna ekledim.

		*Delete

				$Ogr_Delete= ogrenci::where('User_Id','=',$Id)->delete();
		*json

				echo json_encode($json);
				$json['Cevap']=false;
				$json['Id']=$Tekveri->Id;
		*Sorgu

				$Bolumler=bolumler::all();
				$User_Id_Paketi=User::where('email', '=', $Ogr_Kullanici_Id)->first();
				$Konu=konular::all()->where('Ders_Id','=',$Id);
				$ogrenciuser2_sayi=count($ogrenciuser2);
				$Id=$User_Id_Paketi->id;//User tablosuna eklenen verinin Id'si

		*Post ve Get veri çekme

				$Ders_Adi=trim($request->input('Ders_Adi'));
		*Wiev
				return view('Admin.Ogrenci_Ekle')->with('Bolumler',$Bolumler);
				return view('Admin.Sertifika_Bekleyen',compact(['Ogrenciler']));
				return redirect()->back()->with('status','Böyle bir öğrenci bulunmaktadır. Mail adresinizi veya Tc numaranızı kontrol ediniz.');
	*/

}

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Proje Hakkında

Laravel Php framework ile Uzaktan Eğitim Projesi yapılması hedeflenmiştir. 

## Yapılması Gerekenler

Proje indikten sonra " composer update --no-scripts " ile Laravel için gerekli güncelleme yapılmalıdır.
Ardından ;

vendor/laravel/framework/src/Illuminate/Routing/Router.php içerisinde bulunan

		// Password Reset Routes...
        $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        $this->post('password/reset', 'Auth\ResetPasswordController@reset');

        <b>bloğu aşağıdaki ile değiştirilmelidir.</b>

		// Password Reset Routes...
        $this->post('password/reset/3', 'Auth\ForgotPasswordController@showLinkRequestForm3')->name('password.request3');
        $this->post('password/reset/2', 'Auth\ForgotPasswordController@showLinkRequestForm2')->name('password.request2');


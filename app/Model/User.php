<?php namespace App\Model;

// use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Model as Eloquent;
// use Illuminate\Auth\Passwords\CanResetPassword;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
// use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Eloquent {

	// use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

	protected $fillable = ['f_name', 'l_name', 'address','email','mobile','country','answer_1','answer_2','answer_3','answer_4','visit'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	// protected $hidden = ['password', 'remember_token'];

}

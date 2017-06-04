<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use app\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;


class users_Controller extends Controller
{
    //
	public function destroy($id)
	{
		$id = urldecode($id);
		$usuario = User::find($id);
		$usuario->delete();		
		return redirect()->to('admin');
	}
}
<?php
/**
 * Created by PhpStorm.
 * User: koffi
 * Date: 07/08/2018
 * Time: 13:57
 */

namespace app\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        //$users =
        $users = User::all();
        return view('parametrage.utilisateur', ['users' => $users]);
    }
}
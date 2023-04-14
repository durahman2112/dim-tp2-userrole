<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $nama = 'durahman gans';
        return view('user',[
            'nama' => $nama,
            'list' => ['euy 1','euy 2']
        ]);
    }

    public function getUserId($id) {
        return $id;
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class BudgetController extends Controller
{
    public function index(){
      $user=DB::select('select * from user');
      return view('user_view',['user'=>$user]);
    }
}

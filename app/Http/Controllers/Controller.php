<?php

namespace App\Http\Controllers;

use App\Models\Input;
use App\Models\Office;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use function PHPUnit\TextUI\CliArguments\listTests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function oop()
    {


        $inputs = Input::all();
        return $inputs;
    }

//    public function test()
//    {
//        $list = Office::select("offices.*")->join('type', 'type.id', '=','offices.type_id');
//        return $list;
//    }

}

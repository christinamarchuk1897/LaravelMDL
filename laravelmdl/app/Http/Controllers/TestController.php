<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\Mysql\MysqlSource;
use App\Models\TestModel;

class TestController extends Controller {

    private $db;

    public function __construct(MysqlSource $db) {
        $this->db = $db;
    }

    public function postReq(Request $request, TestModel $model) {
        $this->db->post($model, $request->all());

        return \response()->json('success');
    }

    public function get() {
        return \response()->json('allo');
    }
}

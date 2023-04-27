<?php

namespace App\Interfaces\Mysql;

use App\Interfaces\DataBaseInterface;


class MysqlSource implements DataBaseInterface {

    public function get($model, $data) {

    }

    public function post($model, $data) {
        $model->text = $data['text'];
        $model->save();
    }

    public function update($model, $data) {

    }

    public function delete($model, $data) {

    }
}

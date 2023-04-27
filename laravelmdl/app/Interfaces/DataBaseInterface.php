<?php

namespace App\Interfaces;

interface DataBaseInterface {
    public function get($model, $data);
    public function post($model, $data);
    public function update($model, $data);
    public function delete($model, $data);
}


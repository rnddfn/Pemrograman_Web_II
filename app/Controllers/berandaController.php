<?php

namespace App\Controllers;

use App\Models\berandaModel;

class berandaController extends BaseController
{
    public function index(): string
    {
        $model = new berandaModel();
        $data = $model -> getPraktikan();
        return view('beranda', $data);
    }
}

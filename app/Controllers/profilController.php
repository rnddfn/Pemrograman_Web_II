<?php

namespace App\Controllers;

use App\Models\profilModel;

class profilController extends BaseController
{
    public function profil(): string
    {
        $model = new profilModel();
        $data = $model->getProfil();
        return view('profil', $data);
    }
}

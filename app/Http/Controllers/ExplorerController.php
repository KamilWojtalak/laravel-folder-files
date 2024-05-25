<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class ExplorerController extends Controller
{
    public function show(Folder $folder)
    {
        dd('dfsaasdfas', $folder);
        //
    }
}

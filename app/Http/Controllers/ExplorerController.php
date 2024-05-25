<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Folder;
use Illuminate\Http\Request;
use \Illuminate\Contracts\View;

class ExplorerController extends Controller
{
    public function show(Folder $folder): View\View|View\Factory
    {
        $showFolders = Folder::parent($folder)->get();
        $showFiles = File::parent($folder)->get();

        return view(
            'folder.show',
            compact('folder', 'showFolders', 'showFiles')
        );
    }
}

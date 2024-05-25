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
        $showFolders = Folder::getByParent($folder);
        $showFiles = File::getByFolder($folder);

        return view(
            'folder.show',
            compact('folder', 'showFolders', 'showFiles')
        );
    }

    public function showFile(File $file): View\View|View\Factory
    {
        return view(
            'folder.file-show',
            compact('file')
        );
    }
}

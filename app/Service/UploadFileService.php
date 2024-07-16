<?php

namespace App\Service;

use Illuminate\Support\Facades\Storage;

class UploadFileService
{
    public function uploadFile($file)
    {
        $extension = $file->extension();
        $file_name = date('dmyHis') . '.' . $extension;

        $path = Storage::putFileAs('public/images', $file, $file_name);

        $relativePath = str_replace('public/', '', $path);

        return $relativePath;
    }
}

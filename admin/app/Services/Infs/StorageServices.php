<?php

namespace App\Services\Infs;

use App\Models\File;
use Illuminate\Support\Facades\File as FileFacade;
use Illuminate\Support\Str;

class StorageServices
{
    public function storeFile($request, $path, $name = null)
    {
        $image = $request->file('image');
        $filename = Str::random(8) . '-' . ($name ?? $image->getClientOriginalName());
        $image->move(public_path($path), $filename);

        return File::create([
            'name' => $filename,
            'path' => $path . '/' . $filename,
            'public' => 1,
        ]);
    }

    public function deleteFile($id)
    {
        $file = $this->getFileById($id);
        FileFacade::delete(public_path($file->path));

        return $file->delete();
    }

    public function getFileById($id)
    {
        return File::findOrFail($id);
    }
}

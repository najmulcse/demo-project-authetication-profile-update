<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait FileProcessingTrait
{
    public function processSingle(Request $request, $name, $path) {
        $fileName = uniqid() . Str::random(5) . time() . '.' . $request->file($name)->getClientOriginalExtension();
        Storage::disk('public')->put($path . '/' . $fileName, file_get_contents($request->file($name)));
        return $path . '/' . $fileName;
    }

}

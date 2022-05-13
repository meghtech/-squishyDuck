<?php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

function uploadImage($imgString, $path)
    {
        $image_64 = $imgString; //your base64 encoded data

        $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];

        $replace = substr($image_64, 0, strpos($image_64, ',') + 1);

        $image = str_replace($replace, '', $image_64);

        $image = str_replace(' ', '+', $image);

        $imageName = date("Y-m-d-h-i-s") . Str::random(5) . '.' . $extension;

        Storage::disk('image')->put('/images/'.$path.'/' . $imageName, base64_decode($image));
        return $imageName;
    }
?>
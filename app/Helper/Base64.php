<?php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

function uploadImage($imgString, $path)
    {
        $image_64 = $imgString;

        // $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];
        $extension = 'webp';

        $replace = substr($image_64, 0, strpos($image_64, ',') + 1);

        $image = str_replace($replace, '', $image_64);

        $image = str_replace(' ', '+', $image);

        $imageName = date("Y-m-d-h-i-s") . Str::random(5) . '.' . $extension;

        $image = base64_decode($image);

        // Storage::disk('image')->put('/images/'.$path.'/' . $imageName, base64_decode($image));
        $originalPath = public_path() . '/content/images/'.$path;
            $thumbnailImage = Image::make($image)->encode('webp', 100);
            $thumbnailImage->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->save($originalPath.'/'. $imageName);

        return $imageName;
    }
?>
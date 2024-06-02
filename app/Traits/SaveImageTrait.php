<?php 

namespace App\Traits;

use App\Models\Image;

trait SaveImageTrait
{
  public function saveImage($request , $folder)
  {
    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $extension = $image->getClientOriginalExtension();
      $newName = time() . rand(1000, 999999) . '.' . $extension;
      $path = $image->storeAs($folder , $newName, 'public');
      $image = Image::create([
        'path' => $path
      ]);
      return $image;
  }
  }
}
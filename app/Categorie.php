<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use Image;

class Categorie extends Model
{

  static public function save_new($request)
  {

    $image_name = 'no-image-default.png';
    $ex = ['png', 'jpg', 'jpeg', 'gif', 'bmp'];

    if ($request->hasFile('image') && $request->file('image')->isValid()) {

      if (isset($_FILES['image']['name'])) {

        $filename = pathinfo($_FILES['image']['name']);

        if (in_array(strtolower($filename['extension']), $ex)) {

          if (isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {

            $file = $request->file('image');
            $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);
            $img = Image::make(public_path() . '/images/' . $image_name);
            // $img->resize(348.66, null, function ($constraint) {
            //   $constraint->aspectRatio();
            // });
            $img->resize(348.66, 232.44);
            $img->save();
          }
        }
      }
    }


    $category = new self();
    $category->ctitle = $request['title'];
    $category->carticle = $request['article'];
    $category->curl = $request['url'];
    $category->cimage = $image_name;
    $category->save();
    Session::flash('sm', 'Category Added Successfully');
  }

  static public function update_category($request, $id)
  {

    $image_name = '';
    $ex = ['png', 'jpg', 'jpeg', 'gif', 'bmp'];

    if ($request->hasFile('image') && $request->file('image')->isValid()) {

      if (isset($_FILES['image']['name'])) {

        $filename = pathinfo($_FILES['image']['name']);

        if (in_array(strtolower($filename['extension']), $ex)) {

          if (isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {

            $file = $request->file('image');
            $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);
            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->resize(300, null, function ($constraint) {
              $constraint->aspectRatio();
            });
            $img->save();
          }
        }
      }
    }


    $category = self::find($id);
    $category->ctitle = $request['title'];
    $category->carticle = $request['article'];
    $category->curl = $request['url'];
    if ($image_name) {
      $category->cimage = $image_name;
    }
    $category->save();
    Session::flash('sm', 'Category Updated Successfully');
  }
}

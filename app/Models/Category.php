<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public  static $category,$image,$extension,$imageNewName,$directory,$imageUrl;
    public static function saveStudent($request)
    {
        self::$category = new Category();
        self::$category->category_name= $request->category_name;
        if($request->file('image'))
        {
            self::$category->image= self::getImageUrl($request);
        }
        self::$category->save();
    }
    private static function getImageUrl($request)
    {
      self::$image = $request->file('image');
      self::$extension = self::$image->extension();
      self::$imageNewName = rand().'.'.self::$extension;
      self::$directory = 'assets/image-file/';
      self::$image->move(self::$directory,self::$imageNewName);
      self::$imageUrl=self::$directory.self::$imageNewName;
      return self::$imageUrl;

    }
    public static function changeStatus($id)
    {
        self::$category = Category::find($id);
        if(self::$category->status==1)
        {
            self::$category->status=0;

        }
        else{
            self::$category->status=1;

        }
        self::$category->save();
    }

}

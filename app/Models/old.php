<?php
//
//namespace App\Models;
//
//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\ModelNotFoundException;
//
//
//class Schema extends Model
//{
//    use HasFactory;
//
//
//    public static function all()
//    {
//        return File::files(resource_path("schemas/"));
//    }
//
//
//    public static function find($slug)
//    {
//        if(! file_exists($path = resource_path("schemas/{$slug}.html"))) {
//            throw new ModelNotFoundException();
//        }
//        return cache() ->remember("schemas.{$slug}",1200, function () use ($path) {
//            return file_get_contents($path);
//        });
//    }
//}

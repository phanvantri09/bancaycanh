<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Contracts\Routing\UrlGenerator;
use App\Models\Categoty;
use App\Models\Categoty_item;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\SendLinkMail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Box_item;
use App\Models\Transaction;
class ConstCommon {
     const ListTypeUser = ['user'=>111, 'admin'=>222, 'super_admin'=>333];
     const TypeUser = 111;
     const TypeAdmin = 222;
     const TypeSuperAdmin = 333;
     const ListTypeCatogory = ['Danh mục cây'=>1, 'Dịch vụ' =>2, 'Tin tức'=>3];
     const TypeImgae = ['slide' =>1, 'fixed' =>2 ];

    public static function getnameByTypeCategory($key){
        return array_search($key, ConstCommon::ListTypeCatogory);
    }
    public static function getnameByIDCategory($id){
        return Categoty::find($id)->name ?? null;
    }
    public static function getnameByIDCategoryItem($id){
        return Categoty_item::find($id)->name ?? null;
    }

     public static function getAllCategory(){
          return Categoty::all();
     }
     public static function addImageToStorage($file, $name ){
          $file->storeAs('images', $name, 'public');
     }
     public static function getLinkImageToStorage($name){
          return url('storage/images/'.$name);
     }
     public static function delImageToStorage($name){
          return Storage::delete('images/'.$name);
     }
     public static function getCurrentTime(){
        $now = Carbon::now();
        $now->setTimezone('Asia/Ho_Chi_Minh');
        return $now->format('Y-m-d').'-'. $now->format('h-s-i');
     }

     public static function sendMail($email, $content){
        $mail = new SendMail($content);
        return Mail::to($email)->queue($mail);
    }
    public static function sendMailLinkPass($email, $content){
        $mail = new SendLinkMail($content);
        return Mail::to($email)->queue($mail);
    }

}

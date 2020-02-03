<?php
namespace App\Utils;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class Video
{

	// public static function upload($uploadImage, $path)
	// {
	// 	$now = Carbon::now();
	// 	$year = $now->year;
	// 	$month = $now->month;
	// 	$destinationPath = public_path() . $path . "{$year}/{$month}/";

    //     $imageName = $now->timestamp . '.' . $uploadImage->getClientOriginalExtension();
    //     $imagePath = $path . "{$year}/{$month}/{$imageName}";

    //     $uploadImage->move($destinationPath, $imageName);

    //     return $imagePath;
    // }

    public static function upload($uploadFile , $path){
        $now = Carbon::now();
		$year = $now->year;
		$month = $now->month;
		$destinationPath =  storage_path() .'/app/public'.$path."{$year}/{$month}/";

        $videoName = $now->timestamp . '.' . $uploadFile->getClientOriginalExtension();
        $videoPath = $path . "{$year}/{$month}/{$videoName}";
        $uploadFile->move($destinationPath, $videoName);
        return $videoPath;
    }


}

<?php
namespace App\Service;

use Cloudinary\Api\Admin\AdminApi;
use illuminate\Support\Str;

class CloudinaryUpload{

    public static function uploadImage($path,$file){
        // First we validate the input from the user
        // $data = $file->validate([
        //   'media' => [
        //     'required',
        //     'image',
        //     'mimes:jpeg,jpg,png',
        //     ],
        // ]);
        /*Set the transformations required to optimize the images based on recommended optimization*/
        if($path=='products'){
            $folder = $path;
            $media = $file;
            $width = '800';
            $quality = 'auto';
            $fetch = 'auto';
            $crop = 'scale';
        }

        //upload the image to clouldinary
        $uploadedFileUrl = cloudinary()->upload($media->getRealPath(),[
            'folder' => 'gnaza/'.$folder,
            'transformation' => [
                'quality' => $quality,
                'fetch'   => $fetch,
                'crop'    => $crop,
            ]
        ])->getSecurePath();

        //https://res.cloudinary.com/dydkg8ykt/image/upload/v1706548249/gnaza/products/ktadkxi6zirkriuhvkef.jpg
        $dbUrl = Str::after($uploadedFileUrl, 'upload/');
        
        return $dbUrl;
    }

    public static function deleteImage($public_id){
        //$public_ids = ['gnaza/products/ktadkxi6zirkriuhvkef'];
        $public_ids = [$public_id];
        $result = (new AdminApi())->deleteAssets($public_ids, ["resource_type" => "image", "type" => "upload"]);
        return $result;
        // echo json_encode($result, JSON_PRETTY_PRINT);
    }
}
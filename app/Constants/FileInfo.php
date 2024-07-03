<?php

namespace App\Constants;

class FileInfo {

    /*
    |--------------------------------------------------------------------------
    | File Information
    |--------------------------------------------------------------------------
    |
    | This class basically contain the path of files and size of images.
    | All information are stored as an array. Developer will be able to access
    | this info as method and property using FileManager class.
    |
     */

    public function fileInfo() {
        $data['userProfile'] = [
            'path' => public_path().'/assets/images/user/profile',
            'size' => '400x400',
        ];
        $data['adminProfile'] = [
            'path' => public_path().'/assets/images/admin/profile',
            'size' => '400x400',
        ];
        $data['trainerProfile'] = [
            'path' => public_path().'/assets/images/trainer/profile',
            'size' => '400x400',
        ];
        return $data;
    }
}
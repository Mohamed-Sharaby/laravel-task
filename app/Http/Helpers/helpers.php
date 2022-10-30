<?php

function roles()
{
    return [
        'admin' => 'Admin',
        'user' => 'User',
        'member' => 'Member',
    ];
}

function years()
{
    $years = [];
    for ($i = 2000; $i <= 2022; $i++) {
        $years[] = $i;
    }
    return $years;
}

/**
 * Upload Path
 *
 * @return string
 */
function uploadpath()
{
    return 'photos';
}

/**
 * Get Image
 *
 * @param $filename
 * @return string
 */
function getimg($filename)
{
    return asset($filename);
}

////////////////////////////////////////////////////////////////////////

function uploadImage($file, $img)
{
    return '/storage/' . \Storage::disk('public')->putFile($file, $img);
}

function deleteImage($file, $img)
{
    \Storage::disk('public')->delete($file, $img);

    return true;
}

function getImgPath($img)
{
    return asset($img);
}



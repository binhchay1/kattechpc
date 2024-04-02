<?php

namespace App\Enums;

use App\Jobs\StoreImages;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;

final class Utility
{
    public function saveImageProduct($file)
    {
        if ($file) {
            $data = Storage::disk('r2')->put($file->getClientOriginalName(), $file->get());
        }
    }

    public function saveImagePost($input)
    {
        if ($input) {
            Storage::disk('r2')->put($input['thumbnail']->getClientOriginalName(), $input['thumbnail']->get());
        }
    }
    
    public function saveImageLayout($input)
    {
        if (isset($input['big_thumbnail'])) {
            Storage::disk('r2')->put($input['big_thumbnail']->getClientOriginalName(), $input['big_thumbnail']->get());
        }
        if (isset($input['big_banner_thumbnail'])) {
            Storage::disk('r2')->put($input['big_banner_thumbnail']->getClientOriginalName(), $input['big_banner_thumbnail']->get());
        }
        if (isset($input['small_thumbnail_1'])) {
            Storage::disk('r2')->put($input['small_thumbnail_1']->getClientOriginalName(), $input['small_thumbnail_1']->get());
        }
        if (isset($input['small_thumbnail_2'])) {
            Storage::disk('r2')->put($input['small_thumbnail_2']->getClientOriginalName(), $input['small_thumbnail_2']->get());
        }
        if (isset($input['small_thumbnail_3'])) {
            Storage::disk('r2')->put($input['small_thumbnail_3']->getClientOriginalName(), $input['small_thumbnail_3']->get());
        }
        if (isset($input['small_thumbnail_4'])) {
            Storage::disk('r2')->put($input['small_thumbnail_4']->getClientOriginalName(), $input['small_thumbnail_4']->get());
        }
        if (isset($input['small_thumbnail_5'])) {
            Storage::disk('r2')->put($input['small_thumbnail_5']->getClientOriginalName(), $input['small_thumbnail_5']->get());
        }
        if (isset($input['small_thumbnail_6'])) {
            Storage::disk('r2')->put($input['small_thumbnail_6']->getClientOriginalName(), $input['small_thumbnail_6']->get());
        }
        if (isset($input['small_banner_thumbnail_1'])) {
            Storage::disk('r2')->put($input['small_banner_thumbnail_1']->getClientOriginalName(), $input['small_banner_thumbnail_1']->get());
        }
        if (isset($input['small_banner_thumbnail_2'])) {
            Storage::disk('r2')->put($input['small_banner_thumbnail_2']->getClientOriginalName(), $input['small_banner_thumbnail_2']->get());
        }
        
    }

    public function saveImageUser($input)
    {
        if ($input) {
            Storage::disk('r2')->put($input['profile_photo_path']->getClientOriginalName(), $input['profile_photo_path']->get());
        }
    }

    public function paginate($items, $perPage = 15, $path = null, $pageName = 'page', $page = null, $options = [])
    {
        $page = $page ?: Paginator::resolveCurrentPage($pageName);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        $options = ['path' => $path];

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    public function rndRGBColorCode()
    {
        return 'rgb(' . rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255) . ')';
    }

    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function createSlug($str, $delimiter = '-')
    {
        $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
        return $slug;
    }

    public function encode_hash_id($id)
    {
        $timestamp = 125346164;
        $randomKey = 21415;
        $key = base64_encode($timestamp  .  $randomKey . $id);

        return $key;
    }

    public function decode_hash_id($string)
    {
        $decode = base64_decode($string);
        $id = substr($decode, 14);

        return (int) $id;
    }
}

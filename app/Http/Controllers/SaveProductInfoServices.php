<?php

namespace App\Http\Controllers;

use App\Models\products;

class SaveProductInfoServices
{
    public static function save($data, $id = null)
    {

        return products::query()->updateOrCreate(
            ['id' => $id],
            $data
        );
    }

}

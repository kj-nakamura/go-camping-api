<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public static function search(Request $request)
    {
        $query = self::query();
        if (!empty($request->freeword)) {
            $query->where('title', 'like', '%' . $request->freeword . '%');
        }

        return $query->orderBy('id', 'desc')->paginate(10);
    }
}

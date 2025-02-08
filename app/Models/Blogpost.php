<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Blogpost extends Model
{
    //

    public static function factory() {}

    public function tag(): BelongsToMany {}
}

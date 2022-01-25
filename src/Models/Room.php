<?php

namespace Nowyouwerkn\WeHotel\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'wkhotel_rooms';
    protected $primaryKey = 'id';
}

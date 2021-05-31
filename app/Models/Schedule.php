<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed date
 * @property mixed start_time
 * @property mixed end_time
 */
class Schedule extends Model
{
    use HasFactory;

    protected $casts = [
      'date' => 'datetime',
      'start_time' => 'datetime',
      'end_time' => 'datetime',
    ];
}

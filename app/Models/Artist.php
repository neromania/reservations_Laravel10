<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    /**
     * attribute assignments
     *
     * @var array
     */
    protected $fillable = ['firstname','lastname'];

    /**
     * The table association
     *
     * @var string
     */
    protected $table = "artists";

    /**
     *  Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;
}

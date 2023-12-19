<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{

    use SoftDeletes;

    // protected $fillable =['nama'];  //dapat di isi
    protected $guarded = [];    //yang tidak bisa di idi

    protected $hidden = ['created_at', 'updated_at'];    //menyembunyikan data

    public function edulevel(): BelongsTo
    {
        return $this->belongsTo(Edulevel::class);
    }
}

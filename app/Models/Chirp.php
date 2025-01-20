<?php

namespace App\Models;

use App\Events\ChirpCreated; //on ajoute l'event
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    protected $fillable = [
        'message',
    ];

    //Dispatch de l'event 
    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    } 
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;

    protected $table = 'trajets';

    protected $key = 'client_id';

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}

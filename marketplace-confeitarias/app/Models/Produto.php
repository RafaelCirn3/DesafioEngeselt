<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'valor',
        'descricao',
        'confeitaria_id',
    ];

    public function confeitaria()
    {
        return $this->belongsTo(Confeitaria::class);
    }
}

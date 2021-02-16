<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'montante', 'total_antes', 'total_depois', 'user_id_transaction', 'user_id'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zamowienia extends Model
{
    protected $fillable = ['id_kontrahenta', 'nr_zamowienia','status_zamowienia','wartosc_zamowienia'];
}

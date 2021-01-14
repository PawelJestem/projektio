<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{   
    use HasFactory;
    
    protected $fillable = ['nazwa', 'id_zamowienia', 'ilosc','cena_netto','wartosc_zamowienia','id_produktu'];
}

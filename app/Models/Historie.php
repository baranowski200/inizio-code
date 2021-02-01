<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Historie extends Model
{
    protected $table = 'historie';
    public $timestamps = true;

    use HasFactory;

    protected $fillable = [
        "request", "ico", "jmeno", "vznik", "platnost", "adresa", "okres"
    ];
}

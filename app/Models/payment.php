<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = ['id','price','PayFor','nationalCode','name'];
public function getyear(payment $payment){
    $total=2021 - $payment->created_at->year;
    return 1400 - $total;
}
}

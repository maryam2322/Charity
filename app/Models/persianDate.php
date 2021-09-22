<?php
namespace AppTraits;
use Morilog\Jalali\Jalalian;
trait persianDate{
    public function PersianCreatedAt($format="%d %B %Y"){
        return Jalalian::forge($this->created_at)->format($format);
    }
}

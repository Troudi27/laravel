<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;
class Member extends Model
{
    //1st convention : table name
    protected $table ='test';

    //2ed convention : primay key
    // public $primaryKey = 'cin';

    //3rd convention : primay key auto incrementing
    // public $incrementing = flase;

    //4th convention : timestamps
     public $timestamps = flase;
}

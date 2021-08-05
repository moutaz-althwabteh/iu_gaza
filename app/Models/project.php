<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table = 'project';

    
    protected $fillable = [
        'projectname','buildingnumber','coordinates','the owner of real estate','commissioner','Commissioner ID number'
        ,'Commissioner address','Part number and voucher','Land area','Supervising engineer','Project type','Project status'
        ,'starting date','Expiry date','Budget by days','the currency','Notes'        
    ];
}


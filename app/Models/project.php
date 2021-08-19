<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table = 'project';

    
    protected $fillable = [
        'projectname','buildingnumber','coordinates','theowner','commissioner','CommissionerID'
        ,'CommissionerAddress','PartNumber','LandArea','SupervisingEngineer','ProjectType','ProjectStatus'
        ,'startingDate','ExpiryDate','BudgetBydays','theCurrency','Notes'        
    ];
}


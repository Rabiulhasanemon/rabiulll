<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $primaryKey='expense_id';

    public function category(){
      return $this->belongsTo('App\Models\IncomeCategory','expcate_id','expcate_id');
}
}

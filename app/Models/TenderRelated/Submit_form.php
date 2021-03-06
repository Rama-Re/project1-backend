<?php

namespace App\Models\TenderRelated;

use App\Models\Judgment\JudgmentOfCommittee;
use App\Models\Judgment\TenderResult;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submit_form extends Model
{
    use HasFactory;
    protected $fillable = [
        'submit_form_id',
        'tender_id',
        'company_id'
    ];
    protected $table = 'submit_forms';
    protected $primaryKey = 'submit_form_id'; //the name is just neglecated
    public $incrementing = false;

    protected $attributes = [
        'price' => '0',
    ];

    public function JudgmentOfCommittee(){
        return $this->hasMany(JudgmentOfCommittee::class,'submit_form_id');
    }
    public function Supplier_file(){
        return $this->hasMany(Supplier_file::class,'submit_form_id');
    }
    public function TenderResult(){
        return $this->hasOne(TenderResult::class,'submit_form_id');
    }
    
    public function Tender(){
        return $this->belongsTo(Tender::class,'tender_id');
    }
    
    public function Company(){
        return $this->belongsTo(Company::class,'company_id');
    }


}

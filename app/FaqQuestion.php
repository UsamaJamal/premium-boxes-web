<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqQuestion extends Model
{
    protected $fillable = ['faq_category_id', 'question', 'answer', 'status'];

    public function faqCategory()
    {
        return $this->belongsTo(FaqCategory::class, 'faq_category_id', 'id');
    }
}

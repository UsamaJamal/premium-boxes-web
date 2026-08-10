<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    protected $fillable = ['name', 'status'];

    public function faqQuestions()
    {
        return $this->hasMany(FaqQuestion::class, 'faq_category_id', 'id');
    }
}

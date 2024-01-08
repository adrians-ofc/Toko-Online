<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait UuidTrait
{
    protected static Function boot()
    {
        parent::boot();
        static::creating(function($model) {
            $model->incrementing = false;
            $model->keyType = 'string';
            $model->{$model->getKeyName()} = Str::OrderedUuid()->toString();
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
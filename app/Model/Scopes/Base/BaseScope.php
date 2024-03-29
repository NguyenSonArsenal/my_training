<?php

namespace App\Model\Scopes\Base;

// Local scope
trait BaseScope {
    public function scopeWithActive($query)
    {
        return $query->where('del_flag', '=', getConstant('ACTIVE', 0))->orWhereNull('del_flag');
    }
}
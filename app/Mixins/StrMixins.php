<?php

namespace App\Mixins;

class StrMixins
{
    public function partNumber()
    {
        return function ($part) {
            return 'AB-'.mb_substr($part, 0, 3).'-'.mb_substr($part, 3);
        };
    }

    public function prefix()
    {
        return function ($string, $prefix = 'AB-') {
            return $prefix.$string;
        };
    }
}

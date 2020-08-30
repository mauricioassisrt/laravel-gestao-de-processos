<?php

namespace App\Models;


class Platform
{
    public function all($prepend = true)
    {
        return self::getAll($prepend);
    }

    public static function getAll($prepend = true)
    {
        $data = ['android' => 'android', 'ios' => 'ios'];

        if($prepend){
            $data = array_merge([
                '' => '-- Selecione --'
            ], $data );
        }
        return $data;
    }
}

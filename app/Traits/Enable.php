<?php

namespace App\Traits;

trait Enable
{
    /**
     * @return mixed
     */

    public static function enable(): mixed
    {
        return self::where('status', 1);
    }

    public function getEnableAttribute(): string
    {
        return $this->status == 1 ? '<span class="badge badge-success">Enable</span>' : '<span class="badge badge-danger">Disable</span>';
    }
}

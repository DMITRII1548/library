<?php

declare(strict_types=1);

namespace App\Models\Traits;

trait HasFileSrcAttribute
{
    public function getFileSrcAttribute(): string
    {
        if (strpos($this->file, 'http') === 0) {
            return $this->file;
        }

        return url('').'/storage/'.$this->file;
    }
}

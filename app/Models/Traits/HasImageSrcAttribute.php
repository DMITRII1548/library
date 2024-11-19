<?php

declare(strict_types=1);

namespace App\Models\Traits;

trait HasImageSrcAttribute
{
    public function getImageSrcAttribute(): string
    {
        if (strpos($this->image, 'http') === 0) {
            return $this->image;
        }

        return url('').'/storage/'.$this->image;
    }
}

<?php

declare(strict_types=1);

namespace App\Models\Traits;

trait RoleChechable
{
    public function chechRole(string $role): bool
    {
        return $this->role->title === $role;
    }
}

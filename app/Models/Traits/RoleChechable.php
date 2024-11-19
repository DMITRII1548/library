<?php

namespace App\Models\Traits;

trait RoleChechable
{
    public function chechRole(string $role): bool
    {
        return $this->role->title === $role;
    }
}

<?php

namespace VisitaDomiciliar\Uisi\Infrastructure\Repository;

use VisitaDomiciliar\Uisi\Domain\Model\UserDate;
use VisitaDomiciliar\Uisi\Domain\Repository\UserRepository;

class PdoUserDate implements UserRepository
{

    public function allUserDate(): array
    {
        // TODO: Implement allUserDate() method.
    }

    public function save(UserDate $student): bool
    {

    }

    public function update(UserDate $userDate): bool
    {

    }

    public function remove(UserDate $studant): bool
    {
        // TODO: Implement remove() method.
    }
}
<?php

namespace VisitaDomiciliar\Uisi\Domain\Repository;
use VisitaDomiciliar\Uisi\Domain\Model\UserDate;

interface UserRepository
{
    public function allUserDate(): array;
    public function save(UserDate $student): bool;
    public function update(UserDate $student): bool;
    public function remove(UserDate $studant): bool;
}
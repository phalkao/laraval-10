<?php

namespace App\Services;

use App\DTOs\{
    CreateSupportDTO,
    UpdateSupportDTO
};
use App\Repositories\SupportRepositoryInterface;
use stdClass;

class SupportService
{
    public function __construct(
        protected SupportRepositoryInterface $repository
    ){}

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function findOne(string $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }

    public function new(CreateSupportDTO $supportDTO):stdClass
    {
        return $this->repository->new($supportDTO);   
    }

    public function update(UpdateSupportDTO $supportDTO):stdClass|null
    {
        return $this->repository->update($supportDTO);
    }

    public function delete(string $id): void
    {
        $this->repository->delete($id);   
    }
}
?>
<?php


namespace App\Repositories\Contract;

use App\Models\Contract\Contract;

class ContractRepositoryEloquent implements ContractRepositoryInterface
{
    protected $contract;
    public function __construct(Contract $contract)
    {
        $this->contract = $contract;
    }

}

<?php


namespace App\Repositories\Contract;

use App\Models\Contract\Contract;

class ContractRepositoryEloquent implements ContractRepositoryInterface
{
    public $contract;
    public function __construct(Contract $contract)
    {
        $this->contract = $contract;
    }

}

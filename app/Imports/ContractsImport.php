<?php

namespace App\Imports;

use App\Models\Contract;
use Maatwebsite\Excel\Concerns\ToModel;

class ContractsImport implements ToModel
{
    protected $contractGroupId;



    public function __construct($contractGroupId = null)
    {
        $this->contractGroupId = $contractGroupId;
    }

    public function model(array $row)
    {
        return new Contract([
            'name' => $row[0],
            'phone' => $row[1],
            'contract_group_id' => $this->contractGroupId,
            "user_id" => auth()->user()->id
        ]);
    }
}

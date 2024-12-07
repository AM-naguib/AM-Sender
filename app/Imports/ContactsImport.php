<?php

namespace App\Imports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\ToModel;

class ContactsImport implements ToModel
{
    protected $contactGroupId;



    public function __construct($contactGroupId = null)
    {
        $this->contactGroupId = $contactGroupId;
    }

    public function model(array $row)
    {
        return new Contact([
            'name' => $row[0] ?? 'empty',
            'phone' => $row[1] ?? '',
            'contact_group_id' => $this->contactGroupId,
            "user_id" => auth()->user()->id
        ]);
    }
}

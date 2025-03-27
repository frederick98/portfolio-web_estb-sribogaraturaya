<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactExport implements FromCollection, WithHeadings
{
    public function collection(){
        return Contact::all();
    }

    public function headings(): array{
        return[
            'No',
            'Name',
            'Phone No.',
            'E-Mail',
            'Message',
            'Date Time',
            'Created By (1 is Visitor)',
        ];
    }
}

<?php

namespace App\Exports;

use App\odp;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class odpExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return odp::all();
    }
    public function map($exodp):array
    {
        return [
            $exodp->nama,
            $exodp->usia,
            $exodp->kelamin,
            $exodp->alamat,
            $exodp->tgl_konfirmasi,
            $exodp->status,
            $exodp->keterangan,
        ];
    }
    public function headings(): array
    {
        return [
            'NAMA',
            'USIA',
            'JENIS KELAMIN',
            'ALAMAT',
            'TANGGAL KONFIRMASI',
            'STATUS',
            'KETERANGAN',
        ];
    }
}

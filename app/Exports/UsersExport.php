<?php

namespace App\Exports;

use App\Models\MenuPasien;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

// class UsersExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return MenuPasien::all();
//     }
// }


class UsersExport implements FromView, ShouldAutoSize
{
    use Exportable;

    public function view(): View
    {
        return view('export', [
            'menu_pasiens' => MenuPasien::all()
        ]);
    }
}

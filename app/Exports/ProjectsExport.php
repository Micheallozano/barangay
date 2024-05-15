<?php

namespace App\Exports;

use App\Models\Barangay;
use App\Models\Project;
use App\Models\ResidentSector;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

use Carbon\Carbon;

class ProjectsExport implements FromCollection, WithHeadings, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $excelExport = Project::join('barangays', 'barangays.id', '=', 'projects.barangay_id')
                                ->select(
                                    "projects.id",  
                                    "projects.projectname", 
                                    "projects.stakeholder", 
                                    "projects.category", 
                                    "projects.start_date",
                                    "projects.end_date",  
                                    "projects.budget",   
                                    "barangays.barangay",
                                    "projects.status"
                                    )->get()
                                ->groupBy('barangays.barangay')
                                ->sortBy('projectname');

        return $excelExport;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return [
            "ID",
            "PROJECT NAME",
            "STAKEHOLDER",
            "CATEGORY",
            "START DATE",
            "END DATE",
            "BUDGET",
            "ZONE",
            "STATUS",
        ];
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registerEvents(): array
    {
        return [

            AfterSheet::class => function (AfterSheet $event) {

                $event->sheet->getDelegate()->getStyle('A1:K1')
                    ->getFill()
                    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setARGB('FFA500');
              
                 $event->sheet->getDelegate()->freezePane('A2');  
            },

        ];
    }
}
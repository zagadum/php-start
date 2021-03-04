<?php
$monthsList = array("01" => "января",   "02" => "февраля",  "03" => "марта",
                    "04" => "апреля",   "05" => "мая",      "06" => "июня",
                    "07" => "июля",     "08" => "августа",  "09" => "сентября",
                    "10" => "октября",  "11" => "ноября",   "12" => "декабря");
$xls = new Print_AwerySpreadXls();
$xls->getProperties()->setSubject($this->report_title);

$sheet = $xls->getActiveSheet();

//$sheet->setCellValue("B2", 'Утверждена Постановлением Госкомстата России от 05.01.2004 №1');
//$sheet->setCellValue("B4", 'Организация . . . . . . . . . . . . . . . . . . . . . . . .');
//$sheet->setCellValue("B5", 'Структурное подразделение . . . . . . . . . . . . . . . . .');
//$sheet->setCellValue("E4", 'ООО "Авиакомпания "АВИАСТАР-ТУ"');
//$sheet->setCellValue("E5", 'Лётная служба');
//$sheet->setCellValue("AF2", 'Унифицированная форма № Т-13');
//$sheet->setCellValue("AF3", 'Форма по ОКУД');
//$sheet->setCellValue("AF4", 'по ОКПО');
//$sheet->setCellValue("AG2", 'Код');
//$sheet->setCellValue("AG3", '301008');
//$sheet->setCellValue("AG5", '0');
$sheet->setCellValue("C7", 'TIME TABLE');
$sheet->setCellValue("Z7", 'Report N');
$sheet->mergeCells("Z7:AA7");
$sheet->mergeCells("AB7:AC7");
$sheet->mergeCells("AB8:AC8");
$sheet->mergeCells("Z8:AA8");
$sheet->setCellValue("AB7", 'Date');
$sheet->setCellValue("AB8", date('d.m.Y'));
$sheet->setCellValue("AE7", 'Period');
$sheet->setCellValue("AE8", date('d.m.Y', strtotime($this->request->from_date)));
$sheet->setCellValue("AG8", date('d.m.Y', strtotime($this->request->to_date)));

$sheet->mergeCells("AE7:AH7");
$sheet->mergeCells("AE8:AF8");
$sheet->mergeCells("AG8:AH8");
$sheet->mergeCells("AG2:AH2");
$sheet->mergeCells("AG3:AH3");
$sheet->mergeCells("AG4:AH4");
$sheet->mergeCells("AG5:AH5");
$sheet->mergeCells("C7:V8");

//$sheet->getStyle('AG2:AH4')->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
//$sheet->getStyle('AG3:AH3')->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
//$sheet->getStyle('AG3:AH5')->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM);

$sheet->getStyle('Z7:AC8')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
$sheet->getStyle('Z8:AC8')->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM);
$sheet->getStyle('AE7:AH7')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
$sheet->getStyle('AE8:AH8')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM);

//$sheet->getStyle('E4:Y4')->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
//$sheet->getStyle('E5:Y5')->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

$sheet->getRowDimension(10)->setRowHeight(30);
$sheet->getStyle('B1:AH1000')->getFont()->setSize(8);
$sheet->getStyle('E4')->getFont()->setBold(true)->setSize(12);
$sheet->getStyle('E5')->getFont()->setBold(true)->setSize(12);
$sheet->getStyle('C7')->getFont()->setBold(true)->setSize(14);
$sheet->getStyle('AB8')->getFont()->setBold(true);
$sheet->getStyle('AE8')->getFont()->setBold(true);
$sheet->getStyle('AG3')->getFont()->setBold(true);
$sheet->getStyle('AG8')->getFont()->setBold(true);
$sheet->getStyle('E11:T12')->getFont()->setBold(true);

$sheet->getRowDimension(1)->setRowHeight(0);
$sheet->getRowDimension(2)->setRowHeight(0);
$sheet->getRowDimension(3)->setRowHeight(0);
$sheet->getRowDimension(4)->setRowHeight(0);
$sheet->getRowDimension(5)->setRowHeight(0);

foreach(range('E','V') as $columnID) {
    $sheet->getColumnDimension($columnID)->setWidth(7);
}

foreach(range('Y','Z') as $columnID) {
    $sheet->getColumnDimension($columnID)->setWidth(5.5);
}

foreach(range('A','D') as $columnID) {  // AA-AD
    $sheet->getColumnDimension('A'.$columnID)->setWidth(5.5);
}
$sheet->getColumnDimension('AE')->setWidth(3);
$sheet->getColumnDimension('AF')->setWidth(5);
$sheet->getColumnDimension('AG')->setWidth(4);
$sheet->getColumnDimension('AH')->setWidth(7);
$sheet->getColumnDimension('A')->setWidth(1);
$sheet->getColumnDimension('B')->setWidth(3);
$sheet->getColumnDimension('C')->setWidth(14);
$sheet->getColumnDimension('W')->setWidth(8);
$sheet->getColumnDimension('X')->setWidth(8);

$sheet->setCellValue("B10", 'NN');
$sheet->setCellValue("B11", '№');
$sheet->setCellValue("B13", '1');

$sheet->setCellValue("C10", 'Name,');
$sheet->setCellValue("C11", 'Position');
$sheet->setCellValue("C13", '2');

$sheet->setCellValue("D10", 'ID');
$sheet->setCellValue("D11", 'N');
$sheet->setCellValue("D13", '3');

$sheet->setCellValue("E10", 'Notes on attendance and non-attendance at work by days of the month');
$sheet->setCellValue("E13", '4');
$sheet->mergeCells("E10:T10");

$x = 1;
foreach(range('E','S') as $columnID) {
    $sheet->setCellValue($columnID . "11", $x);
    $x++;
}

$sheet->setCellValue("T11", 'X');
$x = 16;
foreach(range('E','T') as $columnID) {
    $sheet->setCellValue($columnID . "12", $x);
    $x++;
}
$sheet->setCellValue("E13", '4');
$sheet->mergeCells("E13:T13");


$sheet->setCellValue("U10", 'Worked Period');
$sheet->mergeCells("U10:V10");
$sheet->setCellValue("U11", '1/2 month');
$sheet->setCellValue("V11", 'Month');
$sheet->setCellValue("U12", 'days/hours');
$sheet->mergeCells("U12:V12");
$sheet->setCellValue("U13", '5');
$sheet->setCellValue("V13", '6');

$sheet->setCellValue("W10", "The norm of the worker \ntime");
$sheet->mergeCells("W10:X10");
$sheet->setCellValue("W11", '1/2 month');
$sheet->setCellValue("X11", 'Month');
$sheet->setCellValue("W12", 'days/hours');
$sheet->mergeCells("W12:X12");
$sheet->setCellValue("W13", '7');
$sheet->setCellValue("X13", '8');

$sheet->setCellValue("Y10", 'Data for payroll by type / direction');
$sheet->mergeCells("Y10:AD10");
$sheet->setCellValue("Y11", 'Invoice Code Type');
//$sheet->setCellValue("Y12", 'оплаты');
$sheet->setCellValue("Y13", '9');
$sheet->setCellValue("Z11", 'Corp Invoice');
//$sheet->setCellValue("Z12", 'счет');
$sheet->setCellValue("Z13", '10');
$sheet->setCellValue("AA11", 'Days (hours)');
//$sheet->setCellValue("AA12", '(часы)');
$sheet->setCellValue("AA13", '11');
$sheet->setCellValue("AB11", 'Invoice Code Type');
//$sheet->setCellValue("AB12", 'оплаты');
$sheet->setCellValue("AB13", '12');
$sheet->setCellValue("AC11", 'Corp Invoice');
//$sheet->setCellValue("AC12", 'счет');
$sheet->setCellValue("AC13", '13');
$sheet->setCellValue("AD11", 'Days (hours)');
//$sheet->setCellValue("AD12", '(часы)');
$sheet->setCellValue("AD13", '14');


$sheet->setCellValue("AE10", 'Absences reasons');
$sheet->mergeCells("AE10:AH10");
$sheet->setCellValue("AE11", 'Code');
$sheet->setCellValue("AE13", '15');
$sheet->setCellValue("AF11", 'Days (hours)');
//$sheet->setCellValue("AF12", '(часы)');
$sheet->setCellValue("AF13", '16');
$sheet->setCellValue("AG11", 'Code');
$sheet->setCellValue("AG12", '');
$sheet->setCellValue("AG13", '17');
$sheet->setCellValue("AH11", 'Days (hours)');
//$sheet->setCellValue("AH12", '(часы)');
$sheet->setCellValue("AH13", '18');

$sheet->getStyle('C7')->getAlignment()
    ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)
    ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$sheet->getStyle('B7:AH13')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$sheet->getStyle('AG2:AG5')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$sheet->getStyle('AF2:AF4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT);
$sheet->getStyle('B13:AH13')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
$sheet->getStyle('E10:X12')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
$sheet->getStyle('B10:B12')->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
$sheet->getStyle('C10:C12')->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
$sheet->getStyle('D10:D12')->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
$sheet->getStyle('Y11:Y12')->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
$sheet->getStyle('Z11:Z12')->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
$sheet->getStyle('W10')->getAlignment()->setWrapText(true);
$sheet->getStyle('Y10')->getAlignment()->setWrapText(true);

$sheet->getStyle("B10:AH10")
    ->getAlignment()
    ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)
    ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

foreach(range('A','H') as $columnID) {
    $sheet->getStyle('A'.$columnID.'11:A'.$columnID.'12')->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
    $x++;
}


$perc_i = 1;
$row_i = 14;
foreach ($this->response['persons'] as $person) {


    $sheet->mergeCells("B". $row_i .":B". ($row_i+3));
    $sheet->setCellValue("B". $row_i, $perc_i);
    $sheet->getStyle("B". $row_i)->getFont()->setBold(true);

    $short_name_initials = '';
    if ($person['name'] != '')
        $short_name_initials .= mb_substr($person['name'], 0, 1, 'utf-8') . ". ";

    if ($person['initials'] != '')
        $short_name_initials .= mb_substr($person['initials'], 0, 1, 'utf-8') . ". ";

    $sheet->setCellValue("C". $row_i, $person['surname']  . ' ' .  $short_name_initials);
    $sheet->getStyle("C". $row_i)->getFont()->setBold(true);

    $sheet->getStyle("B". $row_i . ":B". ($row_i+3))->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
    $sheet->getStyle("B". ($row_i))
            ->getAlignment()
            ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)
            ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

    //$sheet->setCellValue("C". ($row_i+1), $person['positions']);
    $sheet->setCellValue("C". ($row_i+1), $person['defPosition']);
    $sheet->mergeCells("C". ($row_i+1).":C". ($row_i+2));
    $sheet->getStyle("C". $row_i . ":C" . ($row_i+3))->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

    $sheet->getStyle("C". ($row_i+1))->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);

    $sheet->setCellValue("D". ($row_i), $person['internal_code']);
    $sheet->mergeCells("D". $row_i .":D". ($row_i+3));
    $sheet->getStyle("D". $row_i . ":D" . ($row_i+3))->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
    $sheet->getStyle("D". $row_i)->getFont()->setBold(true);

    $sheet->getStyle("D". ($row_i))
                    ->getAlignment()
                    ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)
                    ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

    $works_count_days = [];
    $works_count_summ = [];
    $d = 1; // N day
    for ($rd = 0; $rd <= 2; $rd+=2){
        $works_count_days[$rd] = 0;
        $works_count_summ[$rd] = 0;
        foreach(range('E','T') as $columnID) {
            if (($columnID=='T') && ($rd == 0)) {
                $val_el     = 'X';
                $val_el2    = 'X';
            }elseif( $d <= $this->response['max_day_of_month'] )
            {
               // $person['DutyPer24h'];
                $c_day      = $this->response['number_year'] . '-' . $this->response['number_month'] . '-' . $d;
                $el_duty24  = array_search($c_day, array_column($person['DutyPer24h'], 'day'));

                if ($person['DutyPer24h'][$el_duty24]['duty_time']>0)
                {
                    $val_el     = ($person['DutyPer24h'][$el_duty24]['duty_type_local_codes'] != '')
                        ? $person['DutyPer24h'][$el_duty24]['duty_type_local_codes']
                        : $person['DutyPer24h'][$el_duty24]['duty_type_codes'];
                    $val_el2    = round($person['DutyPer24h'][$el_duty24]['duty_time']/3600, 2) ;

                    if ((isset($this->request->filter_duty_type)) && ($this->request->filter_duty_type == $val_el))
                    {
                        $val_el2 = 7.20;
                    }elseif (isset($this->request->filter_duty_type))
                    {
                        $val_el2 = 0;
                    }

                    $works_count_days[$rd]++ ;
                    $works_count_summ[$rd] += $val_el2;

                }else
                {
                    $val_el     = 'В';
                    $val_el2    = '';
                }
                $d++;
            }else{
                $val_el     = 'X';
                $val_el2    = 'X';
            }

            $sheet->setCellValue($columnID . ($row_i+$rd), $val_el);
            $sheet->setCellValue($columnID . ($row_i+$rd+1), $val_el2);
            $sheet->getStyle($columnID . ($row_i+$rd+1))
                ->getNumberFormat()
                ->setFormatCode('0.00');

            $sheet->getStyle($columnID. ($row_i+$rd) . ":". $columnID . ($row_i+$rd+1))->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

        }
        $sheet->setCellValue("U". ($row_i+$rd), $works_count_days[$rd]);
        $sheet->setCellValue("U". ($row_i+$rd+1), $works_count_summ[$rd]);

        $sheet->getStyle("U". ($row_i+$rd).":U". ($row_i+$rd+1))->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);


        $sheet->mergeCells("X". ($row_i) .":X". ($row_i+1));
        $sheet->setCellValue("X". ($row_i), $this->response['month_work_days']);
        $sheet->mergeCells("X". ($row_i+2) .":X". ($row_i+3));
        $sheet->setCellValue("X". ($row_i+2), "=X".($row_i) . "*7.2");

        $sheet->getStyle("X". ($row_i).":X". ($row_i+2))
            ->getAlignment()
            ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)
            ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle("X". ($row_i).":X". ($row_i+2))
            ->getNumberFormat()
            ->setFormatCode('0.00');


    }
    $sheet->mergeCells("V". ($row_i) .":V". ($row_i+1));
    $sheet->setCellValue("V". ($row_i), array_sum($works_count_days));
    $sheet->mergeCells("V". ($row_i+2) .":V". ($row_i+3));
    $sheet->setCellValue("V". ($row_i+2), array_sum($works_count_summ));
    $sheet->getStyle("V". ($row_i).":V". ($row_i+2))
        ->getAlignment()
        ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)
        ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle("V". ($row_i).":V". ($row_i+2))->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

    $sheet->getStyle("W". ($row_i).":W". ($row_i+1))->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
    $sheet->getStyle("W". ($row_i+2).":W". ($row_i+3))->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
    $sheet->getStyle("X". ($row_i).":X". ($row_i+3))->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);


    $sheet->getStyle("E" . ($row_i) . ":T". ($row_i))->getFont()->setBold(true);
    $sheet->getStyle("E" . ($row_i+2) . ":T". ($row_i+2))->getFont()->setBold(true);

    $sheet->getStyle("B". $row_i . ":T". ($row_i))->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM);
    $sheet->getStyle("Y". $row_i . ":AH" . ($row_i+3))->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

    $perc_i++;
    $row_i = $row_i + 4;
}

$sheet->getStyle('B10'.':AH'.($row_i-1))->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM);
$sheet->getStyle('W10'.':X'.($row_i-1))->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM);
$sheet->getStyle('Y10'.':AD'.($row_i-1))->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM);
$sheet->getStyle('Y10'.':AD'.($row_i-1))->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM);
$sheet->getStyle('AE10'.':AH'.($row_i-1))->getBorders()->getOutline()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM);

$filename='CrewRecordCard '. $this->request->from_date .' - '. $this->request->to_date .'.xlsx';
$xls->Out($filename, 'Xlsx' );

exit;


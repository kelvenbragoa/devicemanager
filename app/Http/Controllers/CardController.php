<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CardController extends Controller
{
    //
    public function internal(){
        $pdf = Pdf::loadView('card.internal');
        $customPaper = array(0,0,555,302);
        $pdf->setPaper($customPaper);
        return $pdf->stream('internal.pdf');
    }

    public function external(){
        $pdf = Pdf::loadView('card.external');
        $customPaper = array(0,0,555,302);
        $pdf->setPaper($customPaper);
        return $pdf->stream('external.pdf');
    }
}

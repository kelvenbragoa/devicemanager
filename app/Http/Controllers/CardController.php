<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CardController extends Controller
{
    //
    public function internal(){
        $name = 'GERSON HOUANE';
        $image = 'https://res.cloudinary.com/dsme9wqfi/image/upload/v1721669738/image-card_ajmhwq.jpg';
        $code = '1281';
        $department = 'DEPART. DE APLICACOES';
        $pdf = Pdf::loadView('card.internal',compact('name','code','department','image'));
        $customPaper = array(0,0,555,302);
        $pdf->setPaper($customPaper);
        return $pdf->stream('internal.pdf');
    }

    public function external(){
        $name = 'GERSON HOUANE';
        $company = 'CORNELDER';
        $image = 'https://res.cloudinary.com/dsme9wqfi/image/upload/v1721669738/image-card_ajmhwq.jpg';
        $pdf = Pdf::loadView('card.external', compact('name', 'company','image'));
        $customPaper = array(0,0,555,302);
        $pdf->setPaper($customPaper);
        $pdf->setOptions([
            'isRemoteEnabled' => true
        ]);
        return $pdf->stream('external.pdf');
    }
}

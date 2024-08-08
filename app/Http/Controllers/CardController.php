<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CardController extends Controller
{
    //
    public function internal(){
        $photo = 'https://res.cloudinary.com/dsme9wqfi/image/upload/v1721669738/image-card_ajmhwq.jpg';
        $qr = 'https://res.cloudinary.com/dsme9wqfi/image/upload/v1721669738/image-card_ajmhwq.jpg';
        
        $customer = new Company();
        $customer->documentNumber='1029101';
        $customer->name='GERSON HOUANE';
        $customer->department='Desenv.Aplicacoes';




        $pdf = Pdf::loadView('card.internal',compact('customer','qr','photo'));
        $customPaper = array(0,0,324,204);
        $pdf->setPaper($customPaper);
        return $pdf->stream('internal.pdf');
    }

    public function external(){

        $photo = 'https://res.cloudinary.com/dsme9wqfi/image/upload/v1721669738/image-card_ajmhwq.jpg';
        $qr = 'https://res.cloudinary.com/dsme9wqfi/image/upload/v1721669738/image-card_ajmhwq.jpg';


        $customer = new Company();
        $customer->documentNumber='1029101';
        $customer->name='GERSON HOUANE';
        $customer->company='MSI';

        $pdf = Pdf::loadView('card.external', compact('customer', 'photo','qr'));
        $customPaper = array(0,0,324,204);
        $pdf->setPaper($customPaper);
        $pdf->setOptions([
            'isRemoteEnabled' => true
        ]);
        return $pdf->stream('external.pdf');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Marque;
use App\Models\Client;
use App\Models\Facture;

class PageController extends Controller
{
    //
    public function dashboard(){
        // Get 3 last facture
        $lastFacture = Facture::latest()->take(3)->get();

        // Get ca of the day
        $todaysFacture = Facture::all()->where('created_at', '>=', \Carbon\Carbon::today());
        $ca = 0;
        foreach($todaysFacture as $item){
            $ca += $item->nb * $item->price;
        }

        // Get ca of the week
        function getStartAndEndDate($week, $year) {
            $dto = new \DateTime();
            return $dto->setISODate($year, $week)->format('Y-m-d');
        }

        $thisWeekFacture = Facture::all()->where('created_at', '>=', getStartAndEndDate(date('W'),date('Y')).' 00:00:00');
        $caw = 0;
        foreach($thisWeekFacture as $item){
            $caw += $item->nb * $item->price;
        }

        // Get ca of the month
        $thisMonthFacture = Facture::all()->where('created_at', '>=', date('Y').'-'.date('m').'-'.'01 00:00:00');
        $cam = 0;
        foreach($thisMonthFacture as $item){
            $cam += $item->nb * $item->price;
        }
        
        return view('pages/dashboard',compact('lastFacture','ca','caw','cam'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
   public function show($work)

   {
      // dd($work);
       $workshop = Workshop::find($work);
       return view('workshop.show', compact('workshop'));
   }
}

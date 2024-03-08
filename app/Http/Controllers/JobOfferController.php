<?php

namespace App\Http\Controllers;

use App\Models\JobOffer;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobOfferController extends Controller
{
    public function index() {
        $job_offers = JobOffer::all();
        return view('job_offers.index', ['job_offers' => $job_offers]);
    }

    public function show(string $id): View {
        $job_offer = JobOffer::findOrFail($id);
        return view('job_offers.show', ['job_offer' => $job_offer]);
    }
}

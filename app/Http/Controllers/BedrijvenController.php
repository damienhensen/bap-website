<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BedrijvenController extends Controller
{
    public function list() {
        // Haal alle bedrijven op met QueryBuilder
//        $companies = \DB::table('companies')->get();
        $companies = \DB::table('companies')->orderBy('name')->get();
//        $companies = \DB::table('companies')->where('country', '=', 'Bahamas')->get();
//        $companies = \DB::table('companies')->where('country', '=', 'Bahamas')->where('city', '=', 'Middelkerke')->get();
//        $companies = \DB::table('companies')->where('country', '=', 'Bahamas')->where('city', '=', 'Middelkerke')->value('name');
//        dd($companies);

        // laat zien
        return view('bedrijven', ['bedrijven' => $companies]);
    }

    public function details($id) {
        // Haal bedrijf op waar id = $id
//        $company = \DB::table('companies')->where('id', '=', $id)->first();
        $company = \DB::table('companies')->find($id);
        // sla op
        // laat zien
        return view('bedrijven-details', ['bedrijf' => $company]);
    }
}

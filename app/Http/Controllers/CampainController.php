<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MonkeyLearn;
use Auth;
use App\Campain;
use App\Company;

class CampainController extends Controller
{
    public function index()
    {
        $userName = Auth::user()->name;

        $campains = Campain::all();

        return view('campain.index', ['userName' => $userName, 'campains' => $campains]);
    }

    public function create()
    {
        $userName = Auth::user()->name;
        $companies = Company::all();
        
        return view('campain.create', ['userName' => $userName, 'companies' => $companies]);
    }

    public function store(Request $request)
    {
        $userName = Auth::user()->name;

        $this->validate($request, [
                'start_at'      => 'required',
                'end_at'        => 'required',
                'description'   => 'required',
                'target'        => 'required',
                'advert'        => 'required'
            ]);

        $input = $request->all();

        $campain = new Campain;
        $campain->start_at = $input['start_at'];
        $campain->end_at = $input['end_at'];
        $campain->description = $input['description'];
        $campain->cost = $input['cost'];
        $campain->gain = $input['gain'];
        $campain->target = $input['target'];
        $campain->advert = $input['advert'];
        $campain->company_id = $input['company_id'];
        $campain->save();

        return redirect('campain/');
    }

    public function processAdvert($campain_id)
    {
        $userName = Auth::user()->name;

        $campain = Campain::find($campain_id);
        $advert = $campain->advert;

        $result = "";
        
        try {
            
            $ml = new MonkeyLearn\Client('74312b126c6fcee32bddc68b6b3d4b15fee48868');
            $text_list = [$advert];
            $module_id = 'ex_eV2dppYE';
            $res = $ml->extractors->extract($module_id, $text_list);
            
            $results = $res->result;
            $results = $results[0];

        }catch(Exception $e) {
          echo 'Message: ' .$e->getMessage();
        }

        return view('campain.result', ['userName' => $userName, 'results' => $results]);
    }

    public function optAdd()
    {
        // $campain = new Campain;
        //
        // $campain->start_at = '2016/01/01';
        // $campain->end_at = '2016/01/20';
        // $campain->description = 'Description 2';
        // $campain->cost = 140;
        // $campain->gain = 310;
        // $campain->target = "19;male;UIO;20-45";
        // $campain->company_id = 1;
        //
        // $campain->save();

        $campain = Campain::find(2);

        print_r($campain->company->name);
        die();
    }
}

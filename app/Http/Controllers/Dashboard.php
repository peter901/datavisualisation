<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Parameter;

class Dashboard extends Controller
{
    public function index(Request $request)
    {
        $filter_param = 'Electrical Conductivity';

        if($request->filter){
            $filter_param = $request->filter;
        }     

        $parameters = Parameter::orderBy('name', 'asc')->get();
        
        $SQL = "SELECT 
                        d.name as district_name, 
                        ROUND(AVG(if(p.name ='Electrical Conductivity',result,0)), 2) as electrical_conductivity, 
                        ROUND(AVG(if(p.name ='pH',result,0)), 2) as pH, 
                        ROUND(AVG(if(p.name ='Turbidity',result,0)), 2) as Turbidity
                FROM parameters p 
                JOIN results r ON p.id = r.parameter_id 
                JOIN districts d ON d.id = r.district_id 
                WHERE p.name IN ('Electrical Conductivity', 'pH', 'Turbidity') 
                GROUP BY d.name";

        $results = DB::select($SQL);

        $circle_parking = [];
        foreach ($results as $r) {
            $district_obj = [
                'name' => $r->district_name,
                'value' => 5,
                'children' => [
                    [
                        'name' => "Electrical Conductivity - {$r->electrical_conductivity} µs/cm",
                        'value' => $r->electrical_conductivity
                    ],
                    [
                        'name' => "pH - {$r->pH} pH",
                        'value' => $r->pH
                    ],
                    [
                        'name' => "Turbidity {$r->Turbidity} NTU",
                        'value' => $r->Turbidity
                    ],
                ]
            ];

            $circle_parking[] = $district_obj;
        }

        $circle_parking = json_encode($circle_parking);

        ///--- start 
            $SQL = "SELECT 
                            d.name as district_name, 
                            ROUND(AVG(if(p.name ='Total Alkalinity',result,0)), 2) as 'Total_Alkalinity', 
                            ROUND(AVG(if(p.name ='Total hardness',result,0)), 2) as 'Total_hardness'
                    FROM parameters p 
                    JOIN results r ON p.id = r.parameter_id 
                    JOIN districts d ON d.id = r.district_id 
                    WHERE p.name IN ('Total Alkalinity', 'Total hardness') 
                    GROUP BY d.name";

            $results = DB::select($SQL);

            $circle_alkalinity_hardness_parking = [];
            foreach ($results as $r) {
                $district_obj = [
                    'name' => $r->district_name,
                    'value' => 5,
                    'children' => [
                        [
                            'name' => "Total Alkalinity - {$r->Total_Alkalinity} mg/L",
                            'value' => $r->Total_Alkalinity
                        ],
                        [
                            'name' => "Total hardness - {$r->Total_hardness} mg/L",
                            'value' => $r->Total_hardness
                        ]
                    ]
                ];

                $circle_alkalinity_hardness_parking[] = $district_obj;
            }

            $circle_alkalinity_hardness_parking = json_encode($circle_alkalinity_hardness_parking);
        ///--- end 


        $SQL = "SELECT concat(s.source_name,' (',d.name,')') as district_name, r.result val
                FROM results r 
                JOIN parameters p ON r.parameter_id = p.id 
                JOIN sources s ON s.id = r.source_id
                JOIN districts d ON d.id = s.district_id
                WHERE p.name = '{$filter_param}'";

        $results = DB::select($SQL);

        $circular_barchart = [];

        foreach ($results as $r) {
            $district_obj = [
                'district' => $r->district_name,
                'Value' => $r->val*10
            ];

            $circular_barchart[] = $district_obj;
        }

        $circular_barchart = json_encode($circular_barchart);

        $SQL = "SELECT d.name, round(AVG(r.result),1) val, p.units
                FROM districts d 
                JOIN results r ON r.district_id = d.id 
                JOIN parameters p ON p.id = r.parameter_id
                WHERE p.name = '{$filter_param}'
                GROUP BY d.name,p.units";
        $results = DB::select($SQL);
        $dognut_data = [];

        $dognut_units ='';
        foreach($results as $r){
            $dognut_units = $r->units;
            $dognut_data[$r->name] = $r->val;
        }
        $dognut_data= json_encode($dognut_data);

        return view("dashboard", compact('dognut_units','dognut_data','filter_param','circle_parking','circular_barchart','circle_alkalinity_hardness_parking','parameters'));
    }
}

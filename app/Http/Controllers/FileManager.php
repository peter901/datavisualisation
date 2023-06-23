<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Csv\Reader;
use Illuminate\Support\Str;
use App\Models\District;
use App\Models\Source;
use App\Models\Parameter;
use App\Models\Result;
use Illuminate\Support\Facades\DB;

class FileManager extends Controller
{
    private function reset_tables()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('districts')->truncate();
        DB::table('parameters')->truncate();
        DB::table('sources')->truncate();
        DB::table('results')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    public function read_csv()
    {
        $this->reset_tables();

        $files = Storage::files("data");

        foreach ($files as $f) {
            $csv = Reader::createFromPath(storage_path("app/public/{$f}"));

            $district_data = ['name' => Str::replace(['data/', '.csv'], '', $f)];

            $district = District::create($district_data);
            echo "<br>----------------------------------------------<br>";

            var_export($district->name);

            echo "<br>----------------------------------------------<br>";

            $source_fields = ['source_name', 'village', 'parish', 'sub_county', 'county', 'g_p_s_location', 'lab_identifier_code'];

            for ($i = 2; $i < 10; $i++) {
                $source_data = [];

                foreach ($csv as $k => $c) {
                    $field =  Str::snake($c[0], $delimiter = '_');

                    if (in_array($field, $source_fields)) {
                        if (isset($c[$i])) {
                            $source_data[$field] = $c[$i];
                        }
                    }

                    if ($k >= 8) {
                        break;
                    }
                }

                if (!empty($source_data)) {
                    $source_data['district_id'] = $district->id;

                    $source = Source::create($source_data);

                    foreach ($csv as $k => $c) {
                        if ($k < 9) {
                            continue;
                        }
                        $param = $c[0];
                        $units = $c[1];

                        if (!empty($units)) {
                            $param_data = ['name' => $param, 'units' => $units];

                            $parameter = Parameter::where('name', $param)->first();

                            if (Parameter::where('name', $param)->first() === NULL) {
                                $parameter = Parameter::create($param_data);
                            }

                            var_export($parameter->name);
                            echo "<br>++<br>";
                            $value = preg_replace("/[^0-9.]/", "",$c[$i]);
                            if(is_numeric($value)){
                                $result_data = [
                                    'district_id' => $district->id,
                                    'parameter_id' => $parameter->id,
                                    'source_id' => $source->id,
                                    'result' => $value,
                                ];
                                $result = Result::create($result_data);
                                var_export($result->result);
                                echo "<br>------------------<br>";
                            }
                        }
                    }
                }
            }
        }
    }
}

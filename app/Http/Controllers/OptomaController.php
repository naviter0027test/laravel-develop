<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Session;

class OptomaController extends Controller
{
    public function productModelSeries(Request $request) {
        $params = $request->all();
        $url = 'https://omrc2-testing.optoma.com/admin/productModel-series';
        return view('optoma.admin.series', ['url' => $url]);
    }

    public function permissionByModelsAlone(Request $request) {
        $params = $request->all();
        $url = 'https://omrc2-testing.optoma.com/permission-by-models-alone';
        return view('optoma.permission_alone', ['url' => $url]);
    }
}

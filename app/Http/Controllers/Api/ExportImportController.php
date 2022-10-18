<?php

namespace App\Http\Controllers\Api;

use App\Exports\ExportUser;
use App\Imports\ImportUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExportImportController extends Controller
{
    
    public function import(Request $request){
        $import = Excel::import(new ImportUser, $request->file('file')->store('files'));
        return response()->json([
            'import'=>$import
        ],200);
    }
  
    public function exportUsers(Request $request){
        $export = Excel::download(new ExportUser, 'users.xlsx');
        return response()->json([
            'export'=>$export
        ],200);
    }

}

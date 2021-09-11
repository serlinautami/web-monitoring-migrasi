<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class ProjectController extends Controller
{
    //
    public function add_project_page($packageId) {
        $package = Package::find($packageId);

        if(!$package) {
            return abort(404);
        }
        
        return view('pages.package.detail.form', [
            'package' => $package
        ]);
    }

    public function edit_project_page($packageId, $id) {

        $package = Package::find($packageId);

        if(!$package) {
            return abort(404);
        }

        return view('pages.package.edit.form', [
            'package' => $package
        ]);
    }

    public function add_project(){

    }
    public function edit_project(){
        
    }
    public function delete_project(){
        
    }
}

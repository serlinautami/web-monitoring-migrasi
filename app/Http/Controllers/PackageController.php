<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Package;
use Illuminate\Support\Str;


class PackageController extends Controller
{

    public function page() {
        $packages = Package::paginate(10);

        foreach ($packages as $package) {
            $package->status_migrasi = $this->readStatus($package->status_migrasi);
            $package->status_upload = $this->readStatus($package->status_upload);
            $package->status_running = $this->readStatus($package->status_running);

            if(!$package->staging == 'yes') {
                $package->stagin = 'Ada';
            } else if($package->staging == 'no') {
                $package->staging = 'Tidak ada';
            } else {
                $package->staging = 'Tidak ada';
            }

            if(!$package->keterangan) {
                $package->keterangan  = '-';
            }
        }

        return view('pages.package.index', [
            'packages' => $packages
        ]);
    }

    public function add_package_page() {
        return view('pages.package.form', [
            'package' => null
        ]);
    }

    public function edit_package_page($id) {
        $package = Package::find($id);

        if(!$package) {
            return abort(404);
        }

        return view('pages.package.form', [
            'package' => $package
        ]);
    }

    public function detail_package_page($id) {
        $package = Package::find($id);

        if(!$package) {
            return abort(404);
        }

        $package->status_migrasi = $this->readStatus($package->status_migrasi);
        $package->status_upload = $this->readStatus($package->status_upload);
        $package->status_running = $this->readStatus($package->status_running);

        if(!$package->staging == 'yes') {
            $package->stagin = 'Ada 0000_staging';
        } else if($package->staging == 'no') {
            $package->staging = 'Tidak ada 0000_staging';
        } else {
            $package->staging = 'Tidak ada';
        }

        if(!$package->keterangan) {
            $package->keterangan  = '-';
        }

        return view('pages.package.detail.index', [
            'package' => $package,
            'projects' => []
        ]);
    }

    public function add_package(Request $request) {
        $validator = Validator::make($request->all(), [
            'ip_server' => 'required',
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $existing = Package::where('ip_server', $request->ip_server)->first();

        if($existing) {
            return back()->withErrors([
                'message' => 'IP Server ini sudah tersedia'
            ])->withInput();
        }

        $package = Package::create([
            'id' => Str::uuid(),
            'ip_server' => $request->ip_server,
            'status_migrasi' => $request->status_migrasi,
            'status_upload' => $request->status_upload,
            'status_running' => $request->status_running,
            'jumlah_job_ssis' => $request->jumlah_job_ssis ? $request->jumlah_job_ssis : 0,
            'staging' => $request->staging,
            'total_connect' => $request->total_connect ? $request->total_connect : 0,
            'keterangan' => $request->keterangan,
        ]);

        if(!$package) {
            return back()->withErrors([
                'message' => 'Server Error'
            ])->withInput();
        }

        return redirect('/package')->with('success', 'Berhasil menyimpan data package');
    }

    public function edit_package(Request $request, $id) {

        $package = Package::find($id);

        if(!$package) {
            return back()->withErrors([
                'message' => 'Package tidak ditemukan'
            ])->withInput();
        }

        $validator = Validator::make($request->all(), [
            'ip_server' => 'required',
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $existing = Package::where('ip_server', $request->ip_server)->first();

        if($existing && $existing->ip_server != $package->ip_server) {
            return back()->withErrors([
                'message' => 'IP Server ini sudah tersedia'
            ])->withInput();
        }

        $package->update([
            'ip_server' => $request->ip_server,
            'status_migrasi' => $request->status_migrasi,
            'status_upload' => $request->status_upload,
            'status_running' => $request->status_running,
            'jumlah_job_ssis' => $request->jumlah_job_ssis ? $request->jumlah_job_ssis : 0 ,
            'staging' => $request->staging,
            'total_connect' => $request->total_connect ? $request->total_connect : 0,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/package')->with('success', 'Berhasil memperbarui data package');
    }

    public function delete_package($id) {
        $package = Package::find($id);

        if(!$package) {
            return abort(404);
        }
        
        $package->delete();

        return redirect('/package')->with('success', 'Berhasil menghapus data');
    }
}

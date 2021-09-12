<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    //
    public function history_page() {
        $histories = History::with(['user'])->orderBy('created_at', 'desc')->paginate(10);

        return view('pages.history.index', [
            'histories' => $histories
        ]);
    }
}

<?php

namespace App\Http\Controllers;
// namespace App\Charts;

use App\Attendance;
// use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AttendanceController extends Controller
{
    /**
     * Construct
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'is_admin']);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Attendance::with('user');

            return DataTables::eloquent($data)
                ->addColumn('action', function ($data) {
                    return view('layouts._action', [
                        'model' => '',
                        'edit_url' => '',
                        'show_url' => route('attendance.show', $data->id),
                        'delete_url' => '',
                    ]);
                })
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->toJson();
        }

        // $users = User::paginate(5);
        return view('pages.attendance.index');
    }

    public function show($id)
    {
        $attendance = Attendance::with(['user', 'detail'])->findOrFail($id);
        return view('pages.attendance.show', compact('attendance'));
    }
}

// class AttendanceChart extends Chart
// {
//     public function __construct(){
//         parent::__construct();
//     }
// }

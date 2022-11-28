<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Appt;

class ApptController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appt = new Appt;
		$appts = $appt->get();
	    return view('appt.list',  ["appts" => $appts]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appt.add');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$appt = new Appt;
		$appts = $appt->insert("$request->nume", $request->cnp, "$request->data", $request->pos);
        return redirect('appt');
    }
	public function select()
    {
        $appt = new Appt;
		$appts = $appt->get();
	    return view('appt.select' ,  ["appts" => $appts]);
    }
	public function showcal()
    {
       $appt = new Appt;
	   $appts = $appt->get();
	   return view('appt.showcal' ,  ["appts" => $appts]);
    }
	public function selhour(Request $request)
    {
       $appt = new Appt;
	   $appts = $appt->get($request->data);
	   return view('appt.selhour' ,  ["appts" => $appts]);
    }
}

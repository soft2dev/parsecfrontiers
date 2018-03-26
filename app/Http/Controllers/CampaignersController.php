<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Campaigners;

class CampaignersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('campaigners.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('campaigners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $this->validate($request,array(
            'walletAddress' => 'required',
            'twitterAccount' => 'required',
            'telegramName' => 'required',
            'preTelegramName' => 'required'
        ));

        $campaigners = new Campaigners;
        $campaigners->walletAddress = $request->walletAddress;
        $campaigners->twitterAccount = $request->twitterAccount;
        $campaigners->telegramName = $request->telegramName;
        $campaigners->preTelegramName = $request->preTelegramName;
        $campaigners->save();
        $resp['status']="success";
        return response()->json($resp);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $campaigners = Campaigners::all();
        return view('campaigners.show')->with('campaigners',$campaigners);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
        {
            //
            $id = $request->id;
            $campaigners = Campaigners::find($id);
            $campaigners->walletAddress = $request->walletAddress;
            $campaigners->twitterAccount = $request->twitterAccount;
            $campaigners->telegramName = $request->telegramName;
            $campaigners->preTelegramName = $request->preTelegramName;
            $campaigners->save();   
            $resp['status']="success";
            return response()->json($resp);
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
    public function destroy(Request $req)
    {
        //
        Campaigners::find($req->id)->delete();
        $resp['status']="success";
        return response()->json($resp);
    }
}

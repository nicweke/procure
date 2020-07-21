<?php

namespace App\Http\Controllers;

use App\Approval;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ApprovalController extends Controller
{
    public function load()
    {
        return view('approval');
    }
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'cname' => 'required',
            'address' => 'required',
            'postal' => 'required',
            'city' => 'required',
        ]);
        $approval = new Approval();
        $approval->fname = $request->input('fname');
        $approval->lname = $request->input('lname');
        $approval->cname = $request->input('cname');
        $approval->address = $request->input('address');
        $approval->postal = $request->input('postal');
        $approval->city = $request->input('city');

        $approval->save();

        $cartItems = \Cart::session(auth()->id())->getContent();

        return view('approve_pdf', ['approval' => $approval, 'cartItems' => $cartItems]);
        //return view('payment', $mytime);

    }

    public function download()
    {
        $approval = DB::table('approvals')->latest()->first();
        $cartItems = \Cart::session(auth()->id())->getContent();
        $pdf = PDF::loadview('approve_pdf');
        return $pdf->download('Request_Approval.pdf', compact(['approval', 'cartItems']));
    }
}

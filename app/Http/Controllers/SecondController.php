<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $a=$request->a;
        $b=$request->b;
        $op=$request->op;
        
        if($op=='+'){
            $hasil=$a+$b;

        }elseif($op=='-'){
            $hasil=$a-$b;

        }
          elseif($op=='x'){
            $hasil=$a*$b;
            
        }
       
          elseif($op==':'){
            if($b!=0) {
            // }if($b>0 || $b<0) {
             $hasil=$a/$b;
             }else{
             $hasil="TIDAK BOLE MEMBAGI DENGAN 0";
             }
        }

    
          else{
            $hasil="";
            return view('second.index', compact('hasil'));
          }
       
        return view('second.hasil',compact( 'hasil' ));
    

    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

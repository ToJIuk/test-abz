<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class TreeController extends Controller
{
    public function index()
    {
        $test_table = Employee::all()->chunk(100);
        foreach ($test_table as $value){
            foreach ($value as $item){
                $tree[$item->parent_id][] = $item->toArray();
            }}


        return view('tree.index', compact('tree'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    public function report1()
    {
        // $data = DB::table('offices')->where('country', 'USA')->get();
        // echo $data->count()();
        // echo "<pre>";
        // print_r($data);
        // return view('reports.report1', compact('data'));

        // $data = DB::table('employees')->get();

        // $data = DB::table('employees')->where('officeCode', 3);
        // $result = $data->get();
        // echo "<pre>";
        // print_r($result);

        //*** JADEER OFFICE CODE 1,2,3 */
        // $data = DB::table('employees')->whereIn('officeCode', [1, 2, 3]);
        // $result = $data->get();
        // echo $data->count();
        // echo "<pre>";
        // print_r($result);

        // $data = DB::table('employees')->where('officeCode', 3)->orWhere('officeCode', 5);
        // $result = $data->get();
        // echo $data->count();
        // echo "<pre>";
        // print_r($result);

        // JADER OFFICE CODE 1,2,3 AND SALES RERPORT
        // $data = DB::table('employees')->whereIn('officeCode', [1, 2, 3])->where('jobTitle', 'Sales Rep');
        // $result = $data->get();
        // echo $data->count();
        // echo "<pre>";
        // print_r($result);

        // first name, last name aksate and and jobtile,email
        // $data = DB::table('employees')->select(DB::raw('CONCAT(lastName,"", firstName) AS fullname'), 'email', 'jobTitle');
        // $result = $data->get();
        // echo $data->count();
        // echo "<pre>";
        // print_r($result);

        // employee nubmer sate jobtitle jader ase tara asbe akane
        // $data = DB::table('employees')->select(DB::raw('count(employeeNumber)'), 'jobTitle')->groupBy('jobTitle');
        // $result = $data->get();
        // echo $result->count();
        // echo "<pre>";
        // print_r($result);


        // where between
        // $data = DB::table('employees')->whereBetween('officeCode', [1, 3]);
        // $result = $data->get();
        // echo $data->count();
        // echo "<pre>";
        // print_r($result);


        // employees thke sob (raw bolle single cotetion diea)


        $data = DB::table('employees');
        $data->join('offices', 'offices.officeCode', '=', 'employees.officeCode');

        $result = $data->get();
        echo $data->count();
        echo "<pre>";
        print_r($result);
    }
}

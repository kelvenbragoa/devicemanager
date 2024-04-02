<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Delivery;
use App\Models\Device;
use App\Models\Employee;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $devices = Device::count();
        $companies = Company::count();
        $employees = Employee::count();
        $deliveries = Delivery::count();
        $dataDeliveryDay = [];
        $dataDeliveryMonth = [];
        $transactions = Transaction::
        with('device')
        ->with('user')
        ->with('employee.company')
        ->with('operation')
        ->orderBy('created_at', 'DESC')->limit(5)->get();

        for ($x = 1; $x <= 31; $x++) {
            $deliveryChartDay = Delivery::whereDay('created_at',$x)->whereMonth('created_at',date('m'))->whereYear('created_at',date('Y'))->count();
            $dataDeliveryDay[]=$deliveryChartDay;
        }

        for ($x = 1; $x <= 12; $x++) {
            $deliveryChartMonth = Delivery::whereMonth('created_at',$x)->whereYear('created_at',date('Y'))->count();
            $dataDeliveryMonth[]=$deliveryChartMonth;
        }



        return response()->json([
            'devices' => $devices,
            'companies' => $companies,
            'employees' => $employees,
            'deliveries' => $deliveries,
            'dataDeliveryDay'=>$dataDeliveryDay,
            'dataDeliveryMonth'=>$dataDeliveryMonth,
            'transactions'=>$transactions
        ]);
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
        //
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

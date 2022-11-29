<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CustomerExport;
class CustomersController extends Controller
{
    protected $customer;
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customers = $this->customer->getList($request->all())->paginate(10);

        $response = [
            'pagination' => [
                'total' => $customers->total(),
                'per_page' => $customers->perPage(),
                'current_page' => $customers->currentPage(),
                'last_page' => $customers->lastPage(),
                'from' => $customers->firstItem(),
                'to' => $customers->lastItem()
            ],
            'data' => $customers
        ];

        return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $response = [
            'success' => 1,
            'message' => __('Create customer success')
        ];
        $data = collect(request()->input())->except('_token')->toArray();
        try {
            Customer::create($data);
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Create customer error: '.$e->getMessage())
            ];
        }
        return response()->json($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->get('id');
        return Customer::findOrFail($id);
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('id');
        $response = [
            'success' => 1,
            'message' => __('Update customer success')
        ];
        try {
            $customer = Customer::findOrFail($id);
            $customer->update($request->all());
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Update customer error: '.$e->getMessage())
            ];
        }
        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $customer = Customer::findOrFail($request->get('id'));
        $customer->delete();
        return '';
    }

    /**
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function export(){
        return Excel::download(new CustomerExport, 'customer'.time().'.csv');
    }
}

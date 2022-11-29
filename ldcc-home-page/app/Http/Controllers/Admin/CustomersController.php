<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Controllers\Controller;
class CustomersController extends Controller
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->middleware('auth:admin');
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
    public function create()
    {
        $response = [
            'success' => 1,
            'message' => __('Create customer success')
        ];
        $data = collect(request()->input())->except('_token')->toArray();
        try {
            $this->customer->createCustomer($data);
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
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
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
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id)
    {
        $response = [
            'success' => 1,
            'message' => __('Update customer success')
        ];
        try {
            $data = collect(request()->input())->except('_token')->toArray();
            $this->customer->updateCustomer($id,$data);
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
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update([
            'status' => 2,
            'deleted_at' => date("Y-m-d H:i:s"),
            'deactive_at' => date("Y-m-d H:i:s")
        ]);
        //$customer->delete();
        $response = [
            'success' => 1,
            'message' => __('Update customer success')
        ];
        return response()->json($response);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function backDelete($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update([
            'status' => 1,
            'deleted_at' => null,
            'deactive_at' => null
        ]);
        //$customer->delete();
        $response = [
            'success' => 1,
            'message' => __('Update customer success')
        ];
        return response()->json($response);
    }
    public function confirmMail($id){
        try {
            $user = User::findOrFail($id);
            event(new Registered($user));
            $response = [
                'success' => 1,
                'message' => __('メールを送信しました。')
            ];
        } catch (\Exception $exception) {
            $response = [
                'success' => 0,
                'message' => __('メールを送信できませんでした。'),
                'message_exception' => $exception->getMessage()
            ];
        }

        return response()->json($response);
    }

    /**
     * @param $email
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkMail ($email) {
        $response = [
            'hasEmail' => Customer::where('email',$email)->count(),
        ];
        return response()->json($response);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function export()
    {
        $fileName = 'customer_'.date('YmdHis').'.csv';
        $headers = [
            'Content-type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename='.$fileName,
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        $callback = function()
        {
            $createCsvFile = fopen('php://output', 'w');

            $columns = [ //1行目の情報
                'ID',
                '氏名',
                '生まれた年',
                '年令',
                '性別',
                '居住地',
                'メールアドレス',
                'メルマガ登録',
                'メルマガ登録 日',
                'created_at',
                'updated_at',
                'deactive_at',
            ];

            mb_convert_variables('SJIS-win', 'UTF-8', $columns);

            fputcsv($createCsvFile, $columns);

            $customers = Customer::getCustomers( request()->all());

            foreach ($customers as $row) {
                $csv = $row;
                mb_convert_variables('SJIS-win', 'UTF-8', $csv);

                fputcsv($createCsvFile, $csv);
            }
            fclose($createCsvFile);
        };

        return response()->stream($callback, 200, $headers);

    }

}

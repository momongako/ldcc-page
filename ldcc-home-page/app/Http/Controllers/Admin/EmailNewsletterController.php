<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\EmailNewsletter;
use App\Http\Controllers\Controller;
class EmailNewsletterController extends Controller
{
    protected $emailNewsletter;
    protected $configTab;

    public function __construct(EmailNewsletter $emailNewsletter)
    {
        $this->middleware('auth:admin');
        $this->emailNewsletter = $emailNewsletter;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $items = $this->emailNewsletter->getList($request->all())->paginate(10);

        $response = [
            'pagination' => [
                'total' => $items->total(),
                'per_page' => $items->perPage(),
                'current_page' => $items->currentPage(),
                'last_page' => $items->lastPage(),
                'from' => $items->firstItem(),
                'to' => $items->lastItem()
            ],
            'data' => $items
        ];

        return response()->json($response);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function export()
    {
        $fileName = 'emails_'.date('YmdHis').'.csv';
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

            $columns = [
                'id',
                'Tên',
                'Email',
                'Ngày đăng ký',
            ];


            fputcsv($createCsvFile, $columns);

            $items = EmailNewsletter::getItems( request()->all());

            foreach ($items as $row) {
                $csv = $row;

                fputcsv($createCsvFile, $csv);
            }
            fclose($createCsvFile);
        };

        return response()->stream($callback, 200, $headers);

    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\Config;
use App\Models\TabConfig;
use App\Http\Controllers\Controller;

use Alaouy\Youtube\Facades\Youtube;
use Vedmant\FeedReader\Facades\FeedReader;
class ConfigsController extends Controller
{
    protected $config;
    protected $configTab;

    public function __construct(Config $config,TabConfig $configTab)
    {
        $this->middleware('auth:admin');
        $this->config = $config;
        $this->configTab = $configTab;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $configs = $this->config->getList($request->all())->paginate(10);

        $response = [
            'pagination' => [
                'total' => $configs->total(),
                'per_page' => $configs->perPage(),
                'current_page' => $configs->currentPage(),
                'last_page' => $configs->lastPage(),
                'from' => $configs->firstItem(),
                'to' => $configs->lastItem()
            ],
            'data' => $configs
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
            'message' => __('Setting Added')
        ];
        $data = collect(request()->input())->except('_token')->toArray();
        try {
            $this->config->createConfig($data);
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Error: '.$e->getMessage())
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
        return Config::findOrFail($id);
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
            'message' => __('Setting Updated')
        ];
        try {
            $data = collect(request()->input())->except('_token')->toArray();
            $this->config->updateConfig($id,$data);
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Error: '.$e->getMessage())
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
        $this->config->updateDeleteConfig($id, [
            'status' => 2
        ]);
        //$customer->delete();
        $response = [
            'success' => 1,
            'message' => __('Setting Deleted')
        ];
        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyTab($id)
    {
        $customer = TabConfig::findOrFail($id);
        $customer->update([
            'status' => 2
        ]);
        //$customer->delete();
        $response = [
            'success' => 1,
            'message' => __('Setting Group Deleted')
        ];
        return response()->json($response);
    }


    /**
     * @param $key
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkKey ($key) {
        $response = [
            'hasKey' => Config::where('key',$key)->count(),
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

    public function createTab()
    {
        $response = [
            'success' => 1,
            'message' => __('Setting Group Added')
        ];
        $data = collect(request()->input())->except('_token')->toArray();
        try {
            $this->configTab->createConfig($data);
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Error: '.$e->getMessage())
            ];
        }
        return response()->json($response);
    }

    public function getAllConfigs(Request $request)
    {
        $configs = $this->configTab->getList($request->all())->paginate(100);

        $response = [
            'pagination' => [
                'total' => $configs->total(),
                'per_page' => $configs->perPage(),
                'current_page' => $configs->currentPage(),
                'last_page' => $configs->lastPage(),
                'from' => $configs->firstItem(),
                'to' => $configs->lastItem()
            ],
            'data' => $configs
        ];

        return response()->json($response);
    }

    public function getConfigAdmin (Request $request) {
        $config = $this->config->getListAdmin($request->all())->paginate(100);
        if($config) {
            $response = [
                'pagination' => [
                    'total' => $config->total(),
                    'per_page' => $config->perPage(),
                    'current_page' => $config->currentPage(),
                    'last_page' => $config->lastPage(),
                    'from' => $config->firstItem(),
                    'to' => $config->lastItem()
                ],
                'data' => $config
            ];
        }
        return response()->json($response);
    }

    public function getListYoutube()
    {
        $videoList = Youtube::listChannelVideos('UCW6eDm0wwHJ_bFaGWLOLahw', 40);

        return response()->json($videoList);
    }

    public function getListPodcast()
    {
        $arrXML = FeedReader::read('https://anchor.fm/s/3a7067ac/podcast/rss');
        // <iframe src="https://anchor.fm/pronexus/embed/episodes/007--Cch-duy-tr-sinh-hot-gia-nh-ch-vi-mt-ngun-thu-nhp-elq9hi" height="102px" width="400px" frameborder="0" scrolling="no"></iframe>
        $itemPodcast = $arrXML->data['child']['']['rss']['0']['child']['']['channel']['0']['child']['']['item'];
        $str_link = array();
        foreach ($itemPodcast as $key => $value) {
            $linkItem = $value['child']['']['link']['0']['data'];
            $arrLink = explode('https://anchor.fm/pronexus/', $linkItem);
            $str_link[] = 'https://anchor.fm/pronexus/embed/'.$arrLink['1'];
            //print_r($str_link);die;
            //Viet code tiep trong nay
        };

        return response()->json($str_link);
    }

    public function getConfigTab($id)
    {
        return TabConfig::findOrFail($id);
    }

    public function updateTab ($id) {
        $response = [
            'success' => 1,
            'message' => __('Setting Group Updated')
        ];
        try {
            $data = collect(request()->input())->except('_token')->toArray();
            $this->configTab->updateConfig($id,$data);
        } catch (\Exception $e) {
            $response = [
                'success' => 0,
                'message' => __('Error: '.$e->getMessage())
            ];
        }
        return response()->json($response);
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Career;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    protected $item;

    public function __construct(Career $item)
    {
        $this->item = $item;
    }

    public function index()
    {
        return view('career.index');
    }
    public function careerCulture()
    {
        return view('career.culture');
    }
    public function careerOpportunity()
    {
        $listCareerOpportunity = Post::where('status',1)
        ->where('category_id',2)
        ->where('end_date', '>=', NOW())
        ->orderBy('created_at', 'DESC')
        ->get();

        return view('career.opportunity',
            ['listCareerOpportunity' => $listCareerOpportunity

            ]);
    }

    public function careerOpportunityDetail(Request $request)
    {
        $post = Post::where('slug',$request->slug)->first();
        $listCareerOpportunity = Post::where('status',1)
            ->where('category_id',2)
            ->where('end_date', '>=', NOW())
            ->where('slug', '<>', $request->slug)
            ->limit(7)
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('career.opportunityDetail',
            ['post' => $post,
             'listCareerOpportunity' => $listCareerOpportunity
            ]);
    }

    public function register(Request $request)
    {
        $data = $this->getAttributeCareer($request);
        try {

            if($request->file('file-0')){
                $arrayExtension = [
                    'png',
                    'jpg',
                    'doc',
                    'docx',
                    'xls',
                    'xlsx',
                    'pdf'
                ];
                $fileUpload  = request()->file('file-0');
                $name = $fileUpload->getClientOriginalName();
                if (in_array(pathinfo($name, PATHINFO_EXTENSION), $arrayExtension)){
                    $career = Career::create($data);
                    $careerId = $career->id;

                    $path = public_path('/career/'.$careerId);
                    $fileUpload->move($path, $name);
                    $data['path'] = '/career/'.$careerId.'/'.$name;
                    $data['file_name'] = $name;

                    $career = Career::findOrFail($careerId);
                    $career->update($data);
                    return response()->json(['success'=>true]);
                }else{
                    return response()->json(['success'=> false]);
                }

            }


        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function getList(Request $request)
    {
        $items = $this->item->getList($request->all())->paginate(10);

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

    public function downloadFile(Request $request)
    {
        $career = Career::findOrFail($request->id);

        return  response()->download(public_path($career->path));
    }

    public function getAttributeCareer($request)
    {
       return [
           'name'      => $request->name,
           'email'     => $request->email,
           'phone'     => $request->phone,
           'position'  => $request->position == 1 ? "Ha Noi" : "Ho Chi Minh",
           'message'   => $request->message,
           'path'      => '',
           'file_name'      => ''
       ];
    }
}

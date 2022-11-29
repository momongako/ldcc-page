<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\ContactUs;

class AboutController extends Controller
{

    protected $item;

    public function __construct(ContactUs $item)
    {
        $this->item = $item;
    }
    public function index()
    {
        return view('about.index');
    }


    public function aboutOverview()
    {
        return view('about.overview');
    }

    public function aboutVision()
    {
        return view('about.vision');
    }

    public function aboutCeo()
    {
        return view('about.ceo');
    }

    public function aboutHistory()
    {
        return view('about.history');
    }

    public function aboutPartnership()
    {
        return view('about.partnership');
    }

    public function aboutNewEvent()
    {
        $newEvents = Post::where('status',1)
            ->where('category_id',1)
            ->limit(3)
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('about.new_event',['newEvents' => $newEvents]);
    }
    public function aboutNewEventProductDetail(Request $request)
    {
        $post =Post::where('slug',$request->slug)->first();
        return view('about.new_event_product_detail',['post' => $post]);
    }

    public function register(Request $request)
    {
        $data = $this->getAttributeContact($request);
        try {
            ContactUs::create($data);
            return response()->json(['success'=>true]);

        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function getAttributeContact($request)
    {
        return [
            'name'      => $request->name,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'company'   => $request->company,
            'message'   => $request->message
        ];
    }

//    public function getListContactUs(){
//        return response()->json(ContactUs::all());
//    }
    public function getListContactUs(Request $request){

        $items = $this->item->getList($request->all())->paginate(10);
        $response = [
            'pagination' =>[
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
}

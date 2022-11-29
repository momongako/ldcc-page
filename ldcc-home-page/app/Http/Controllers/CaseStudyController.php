<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CaseStudyController extends Controller
{
    public function index()
    {
        $caseStudys = Post::where('status',1)
            ->where('category_id',3)
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('case-study.index',['caseStudys' => $caseStudys]);
    }
    public function caseStudyDetail1()
    {
        return view('case-study.Detail1');
    }
    public function caseStudyDetail2()
    {
        return view('case-study.Detail2');
    }
    public function caseStudyDetail3()
    {
        return view('case-study.Detail3');
    }
    public function caseStudyDetail4()
    {
        return view('case-study.Detail4');
    }
    public function caseStudyDetail5()
    {
        return view('case-study.Detail5');
    }
    public function caseStudyDetail6()
    {
        return view('case-study.Detail6');
    }
    public function caseStudyDetail7()
    {
        return view('case-study.Detail7');
    }
    public function caseStudyDetail8()
    {
        return view('case-study.Detail8');
    }
    public function caseStudyDetail9()
    {
        return view('case-study.Detail9');
    }
    public function caseStudyDetail10()
    {
        return view('case-study.Detail10');
    }
    public function caseStudyDetail11()
    {
        return view('case-study.Detail11');
    }
    public function caseStudyDetail12()
    {
        return view('case-study.Detail12');
    }
    public function caseStudyDetail13()
    {
        return view('case-study.Detail13');
    }
    public function caseStudyDetail14()
    {
        return view('case-study.Detail14');
    }
    public function caseStudyDetail15()
    {
        return view('case-study.Detail15');
    }
    public function caseStudyDetail16()
    {
        return view('case-study.Detail16');
    }
    public function caseStudyDetail17()
    {
        return view('case-study.Detail17');
    }
    public function caseStudyDetail18()
    {
        return view('case-study.Detail18');
    }
    public function caseStudyDetail19()
    {
        return view('case-study.Detail19');
    }
    public function caseStudyDetail20()
    {
        return view('case-study.Detail20');
    }
    public function caseStudyDetail21()
    {
        return view('case-study.Detail21');
    }
    public function caseStudyDetail22()
    {
        return view('case-study.Detail22');
    }
    public function caseStudyDetail23()
    {
        return view('case-study.Detail23');
    }
    public function caseStudyDetail24()
    {
        return view('case-study.Detail24');
    }
    public function caseStudyDetail25()
    {
        return view('case-study.Detail25');
    }
    public function caseStudyDetail26()
    {
        return view('case-study.Detail26');
    }
    public function caseStudyDetail27()
    {
        return view('case-study.Detail27');
    }
    public function caseStudyDetail28()
    {
        return view('case-study.Detail28');
    }

    public function caseStudyDetail(Request $request)
    {
        $caseStudyDetail = Post::where('slug',$request->slug)->first();
        return view('case-study.detail',['caseStudyDetail' => $caseStudyDetail]);
    }
}

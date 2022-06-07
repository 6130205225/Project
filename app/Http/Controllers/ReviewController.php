<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Reviewpic;
use App\Models\Reviewcomment;
use App\Models\Temple;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function getReview()
    {
        $reviewtemple = Review::select(
            'reviews.review_id',
            'reviews.review_topic',
            'reviews.review_description',
            'reviewpics.review_pic_url'
        ) //คือการดึงข้อมูล
            ->leftJoin('reviewpics', 'reviews.review_id', '=', 'reviewpics.fk_review_id')
            ->orderBy('reviews.review_id', 'asc') // asc= เรียงจากหน้าไปหลัง desc=เรียงจากหลังไปหน้า
            ->get();
        // dd($reviewtemple);
        return view('Reviewall', compact('reviewtemple'));
    }

    public function Onreviewtemple(Request $request)
    {
        $Onereview = $request->reviewid;
        $Tworeview = Review::select('temple_name','review_topic', 'review_description', 'review_pic_url')
        ->leftJoin('reviewpics', 'reviews.review_id', '=', 'reviewpics.fk_review_id')
        ->join('temples', 'reviews.fk_temple_id', '=', 'temples.temple_id')
        ->where('reviews.review_id', '=', $Onereview)
        ->get();
        return view('Review', compact('Tworeview'));
    }

    public function SearchReview(Request $request)
    {
        $searchRw = $request->searchRw; //เอาไว้เก็บตัวแปรที่รับมา ตัวแรกด้านซ้ายจะเป็นอะไรก็ได้ แต่ตัวแปรด้านขวาต้องเป็นชื่อที่ตรงกับ name ในหน้า view
        //------------- ข้างล่างนี้คือการ Query ข้อมูล (การค้นหาข้อมูล) -------------------
        $searchOneRw = Review::select('reviews.review_topic', 'reviews.review_description', 'reviewpics.review_pic_url')
        ->leftJoin('reviewpics', 'reviews.review_id', '=', 'reviewpics.fk_review_id')
        ->where('review_topic', 'LIKE', "%{$searchRw}%") //LIKE คือถ้ามีคำที่เหมือนกับ ตัวแปรด้านขวา
        ->get();
        //------------- สิ้นสุดการ Query ข้อมูล ----------------------------
        // dd($searchOneRw);
        return view('ReviewSearch', compact('searchOneRw')); //ด้านในของ return จะสังเกตุได้ว่าไม่มี $ เพราะใน laravel9 ได้อัพเดท เป็นการใส่ '' แทน $
    }

}

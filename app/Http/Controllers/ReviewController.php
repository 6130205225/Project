<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Reviewpic;
use App\Models\Reviewcomment;

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
            ->join('reviewpics', 'reviews.review_id', '=', 'reviewpics.fk_review_id')
            ->orderBy('reviews.review_id', 'asc') // asc= เรียงจากหน้าไปหลัง desc=เรียงจากหลังไปหน้า
            ->get();
        // dd($reviewtemple);
        return view('Reviewall', compact('reviewtemple'));
    }

    public function Onreviewtemple(Request $request)
    {
        $Onereview = $request->reviewid;
        $Tworeview = Review::select('review_topic', 'review_description', 'review_pic_url')
        ->join('reviewpics', 'reviews.review_id', '=', 'reviewpics.fk_review_id')
        ->where('reviews.review_id', '=', $Onereview)
        ->get();
        return view('Review', compact('Tworeview'));
    }

}

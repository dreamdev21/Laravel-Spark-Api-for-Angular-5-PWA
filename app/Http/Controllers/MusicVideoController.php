<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicVideoController extends Controller
{
    public function featuredVideos()
    {
        return 'Featured Videos';
    }

    public function mostViewed()
    {
        return 'Most Viewed Videos';
    }

    public function popularVideos()
    {
        return 'Popular Videos';
    }
}

<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'Learn the Laravel PHP framework from scratch by building a job listings application with Laravel 9 and MySQL.'
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'Thank you Brad for this. I was literally just going through your PHP course when you popped this one up. I hope you and your family are well and welcome back.'
            ]
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
};

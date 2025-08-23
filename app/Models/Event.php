<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $guarded = [];

    protected $casts = [
        'paid' => 'boolean',
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function getLocationLabelAttribute()
    {
        return [
            'oruMois' => 'Oru Mõis',
            'tuhalaKirik' => 'Tuhala Kirik',
        ][$this->location] ?? $this->location;
    }

    public function getLocationLinkAttribute()
    {
        return [
            'oruMois' => 'https://www.google.com/maps/place/Oru+m%C3%B5is/@59.1898759,24.9831921,17z/data=!3m1!4b1!4m6!3m5!1s0x4692db7d85d3b6b5:0xa06618dd62804917!8m2!3d59.1898759!4d24.985767!16s%2Fg%2F11bywvxk7z?entry=ttu&g_ep=EgoyMDI1MDgxMy4wIKXMDSoASAFQAw%3D%3Dois',
            'tuhalaKirik' => 'https://www.google.com/maps/place/Tuhala+Kaarli+kirik/@59.1957465,24.9620707,17z/data=!4m10!1m2!2m1!1sTuhala+Kirik!3m6!1s0x4692dde130e081cb:0x4724cf07267671a6!8m2!3d59.1956785!4d24.9666041!15sCgxUdWhhbGEgS2lyaWuSARZyZWxpZ2lvdXNfb3JnYW5pemF0aW9uqgE1EAEyHxABIhtkXZ8bFWhjHIXvTeVPkHSoB84BrQcthOmHNGcyEBACIgx0dWhhbGEga2lyaWvgAQA!16s%2Fg%2F11fmrprqcj?entry=ttu&g_ep=EgoyMDI1MDgxOS4wIKXMDSoASAFQAw%3D%3D',
        ][$this->location] ?? '#';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

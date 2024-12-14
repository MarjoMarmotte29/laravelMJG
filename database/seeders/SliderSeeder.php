<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'title' => 'Nageurs',
                'url' => '/images/02.jpg'
            ],
            [
                'title' => 'Reconfort',
                'url' => '/images/03.jpg'
            ],
            [
                'title' => 'Le chef',
                'url' => '/images/07.jpg'
            ],
            [
                'title' => 'Le Briefing',
                'url' => '/images/08.jpg'
            ],
            [
                'title' => 'La Pédagogie',
                'url' => '/images/F1_F2 019.jpg'
            ]
        ];
        foreach ($sliders as $key => $value) {
            Slider::create($value);
        }
    }
}
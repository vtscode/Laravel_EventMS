<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            [
                'key'   => 'title',
                'value' => 'Pelatihan Kesehatan<br><span>Pondok Khitan</span> Workshop'
            ],
            [
                'key'   => 'subtitle',
                'value' => '10-12 December, Toto Dinar Center, Magelang'
            ],
            [
                'key'   => 'youtube_link',
                'value' => 'https://www.youtube.com/watch?v=zubVnRYncrE'
            ],
            [
                'key'   => 'about_description',
                'value' => 'Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt inventore in est ut optio sequi unde.'
            ],
            [
                'key'   => 'about_where',
                'value' => 'Toto Dinar Center, Magelang'
            ],
            [
                'key'   => 'about_when',
                'value' => 'Monday to Wednesday<br>10-12 December'
            ],
            [
                'key'   => 'contact_address',
                'value' => 'Jl.Panembahan Senopati, Magelang, Jawa Tengah'
            ],
            [
                'key'   => 'contact_phone',
                'value' => '+62 898 9554 8875'
            ],
            [
                'key'   => 'contact_email',
                'value' => 'info@eventpedia.com'
            ],
            [
                'key'   => 'footer_description',
                'value' => 'In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.'
            ],
            [
                'key'   => 'footer_address',
                'value' => 'Jl.Panembahan Senopati <br> Magelang<br> Jawa Tengah'
            ],
            [
                'key'   => 'footer_twitter',
                'value' => '#'
            ],
            [
                'key'   => 'footer_facebook',
                'value' => '#'
            ],
            [
                'key'   => 'footer_instagram',
                'value' => '#'
            ],
            [
                'key'   => 'footer_googleplus',
                'value' => '#'
            ],
            [
                'key'   => 'footer_linkedin',
                'value' => '#'
            ],
        ];

        foreach($settings as $setting)
        {
            Setting::create($setting);
        }
    }
}
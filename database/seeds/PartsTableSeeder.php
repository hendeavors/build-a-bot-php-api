<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parts')->delete();
        //
        DB::table('parts')->insert([[
            'type' => 'heads',
            'description' => 'A robot head with an unusually large eye and teloscpic neck -- excellent for exploring high spaces.',
            'title' => 'Large Cyclops',
            'src' => '/api/images/head-big-eye.png',
            'cost' => 1225.5,
            'onSale' => false
        ],[
            'type' => 'heads',
            'description' => 'A friendly robot head with two eyes and a smile -- great for domestic use.',
            'title' => 'Friendly',
            'src' => '/api/images/head-friendly.png',
            'cost' => 945.0,
            'onSale' => true
        ],[
            'type' => 'heads',
            'description' => 'A large three-eyed head with a shredder for a mouth -- great for crushing light medals or shredding documents.',
            'title' => 'Shredder',
            'src' => '/api/images/head-shredder.png',
            'cost' => 1275.5,
            'onSale' => false
        ],[
            'type' => 'heads',
            'description' => 'A simple single-eyed head -- simple and inexpensive.',
            'title' => 'Small Cyclops',
            'src' => '/api/images/head-single-eye.png',
            'cost' => 750.0,
            'onSale' => false
        ],[
            'type' => 'heads',
            'description' => 'A robot head with three oscillating eyes -- excellent for surveillance.',
            'title' => 'Surveillance',
            'src' => '/api/images/head-surveillance.png',
            'cost' => 1255.5,
            'onSale' => false
        ],[
            'type' => 'arms',
            'description' => 'An articulated arm with a claw -- great for reaching around corners or working in tight spaces.',
            'title' => 'Articulated',
            'src' => '/api/images/arm-articulated-claw.png',
            'cost' => 275,
            'onSale' => false
        ],[
            'type' => 'arms',
            'description' => 'An arm with two independent claws -- great when you need an extra hand. Need four hands? Equip your bot with two of these arms.',
            'title' => 'Two Clawed',
            'src' => '/api/images/arm-dual-claw.png',
            'cost' => 285,
            'onSale' => false
        ],[
            'type' => 'arms',
            'description' => 'A telescoping arm with a grabber.',
            'title' => 'Grabber',
            'src' => '/api/images/arm-grabber.png',
            'cost' => 205.5,
            'onSale' => false
        ],[
            'type' => 'arms',
            'description' => 'An arm with a propeller -- good for propulsion or as a cooling fan.',
            'title' => 'Propeller',
            'src' => '/api/images/arm-propeller.png',
            'cost' => 230,
            'onSale' => true
        ],[
            'description' => 'A short and stubby arm with a claw -- simple, but cheap.',
            'title' => 'Stubby Claw',
            'src' => '/api/images/arm-stubby-claw.png',
            'type' => 'arms',
            'cost' => 125,
            'onSale' => false
        ],[
            'description' => 'A torso that can bend slightly at the waist and equiped with a heat guage.',
            'title' => 'Flexible Gauged',
            'src' => '/api/images/torso-flexible-gauged.png',
            'type' => 'torsos',
            'cost' => 1575,
            'onSale' => false
        ],[
            'description' => 'A less flexible torso with a battery gauge.',
            'title' => 'Restricted Gauged',
            'src' => '/api/images/torso-gauged.png',
            'type' => 'torsos',
            'cost' => 1385,
            'onSale' => false
        ],[
            'description' => 'A simple torso with a pouch for carrying items.',
            'title' => 'Basic Gauged',
            'src' => '/api/images/torso-pouch.png',
            'type' => 'torsos',
            'cost' => 785,
            'onSale' => true
        ],[
            'description' => 'A two wheeled base with an accelerometer for stability.',
            'title' => 'Double Wheeled',
            'src' => '/api/images/base-double-wheel.png',
            'type' => 'bases',
            'cost' => 895,
            'onSale' => false
        ],[
            'description' => 'A rocket base capable of high speed, controlled flight.',
            'title' => 'Rocket',
            'src' => '/api/images/base-rocket.png',
            'type' => 'bases',
            'cost' => 1520.5,
            'onSale' => false
        ],[
            'description' => 'A single-wheeled base with an accelerometer capable of higher speeds and navigating rougher terrain than the two-wheeled variety.',
            'title' => 'Single Wheeled',
            'src' => '/api/images/base-single-wheel.png',
            'type' => 'bases',
            'cost' => 1190.5,
            'onSale' => false
        ],[
            'description' => 'A spring base - great for reaching high places.',
            'title' => 'Spring',
            'src' => '/api/images/base-spring.png',
            'type' => 'bases',
            'cost' => 1190.5,
            'onSale' => false
        ],[
            'description' => 'An inexpensive three-wheeled base. only capable of slow speeds and can only function on smooth surfaces.',
            'title' => 'Triple Wheeled',
            'src' => '/api/images/base-triple-wheel.png',
            'type' => 'bases',
            'cost' => 700.5,
            'onSale' => false
        ]]);
    }
}

<?php

namespace App\Enums;

enum FontAwesomeIcon: string
{
    case FA_TV = 'Television';
    case FA_MOBILE_ALT = 'Mobile';
    case FA_LAPTOP = 'Laptop';
    case FA_CAMERA = 'Camera';
    case FA_HEADPHONES = 'Headphones';
    case FA_TABLET_ALT = 'Tablet';
    case FA_PRINT = 'Printer';
    case FA_WIFI = 'Router';
    case FA_MOUSE = 'Mouse';
    case FA_KEYBOARD = 'Keyboard';
    case FA_SERVER = 'Server';
    case FA_HDD = 'Hard Drive';
    case FA_USB = 'USB';
    case FA_BATTERY_FULL = 'Battery';
    case FA_WATCH = 'Watch';
    case FA_FOOD = 'Food';
    case FA_GAMEPAD = 'Gamepad';
    case FA_LIGHTBULB = 'Lightbulb';
    case FA_MICROPHONE = 'Microphone';
    case FA_VOLUME_UP = 'Speaker';
    case FA_SUNGLASSES = 'Sunglasses';
    case FA_CLOCK = 'Clock';
    case FA_FAN = 'Fan';
    case FA_CAR = 'Car';
    case FA_HOME = 'Home';
    case FA_SHOPPING_CART = 'Shopping Cart';
    case FA_BICYCLE = 'Bicycle';
    case FA_TREE = 'Tree';
    case FA_DOG = 'Dog';
    case FA_CAT = 'Cat';
    
    public function icon(): string
    {
        return match($this) {
            self::FA_TV => 'fa-tv',
            self::FA_MOBILE_ALT => 'fa-mobile-alt',
            self::FA_LAPTOP => 'fa-laptop',
            self::FA_CAMERA => 'fa-camera',
            self::FA_HEADPHONES => 'fa-headphones',
            self::FA_TABLET_ALT => 'fa-tablet-alt',
            self::FA_PRINT => 'fa-print',
            self::FA_WIFI => 'fa-wifi',
            self::FA_MOUSE => 'fa-mouse',
            self::FA_KEYBOARD => 'fa-keyboard',
            self::FA_SERVER => 'fa-server',
            self::FA_HDD => 'fa-hdd',
            self::FA_USB => 'fa-usb',
            self::FA_BATTERY_FULL => 'fa-battery-full',
            self::FA_WATCH => 'fa-stopwatch-20',
            self::FA_FOOD => 'fa-burger',
            self::FA_GAMEPAD => 'fa-gamepad',
            self::FA_LIGHTBULB => 'fa-lightbulb',
            self::FA_MICROPHONE => 'fa-microphone',
            self::FA_VOLUME_UP => 'fa-volume-up',
            self::FA_SUNGLASSES => 'fa-glasses',
            self::FA_CLOCK => 'fa-clock',
            self::FA_FAN => 'fa-fan',
            self::FA_CAR => 'fa-car',
            self::FA_HOME => 'fa-home',
            self::FA_SHOPPING_CART => 'fa-shopping-cart',
            self::FA_BICYCLE => 'fa-bicycle',
            self::FA_TREE => 'fa-tree',
            self::FA_DOG => 'fa-dog',
            self::FA_CAT => 'fa-cat',
        };
    }
}

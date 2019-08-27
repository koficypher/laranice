<?php

namespace KofiCypher\Laranice;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Console\Presets\Preset as LaranicePreset;


class Preset extends LaranicePreset
{

  public static function install()
  {
      static::cleanSassDirectory();
      static::updatePackages();
      static::updateMix();
  }


  public static function cleanSassDirectory()
  {
      File::cleanDirectory(resource_path('sass'));
  }

  public static function updatePackageArray($packages)
  {
    //   return ["laravel-mix" => "^2.0"];
    // return Arr::except($packages,[
    //     "lodash"
    // ]);

    return array_merge(["laravel-mix-tailwind" => "^0.1.0"],Arr::except($packages,[
        "lodash"
    ]));

  }


  public static function updateMix()
  {
      copy(__DIR__.'/stubs/webpack.mix.js', base_path('webpack.mix.js'));
  }
}

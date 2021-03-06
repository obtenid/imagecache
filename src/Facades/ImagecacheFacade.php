<?php namespace Obtenid\Imagecache\Facades;

use Illuminate\Support\Facades\Facade;

class ImagecacheFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
      return 'imagecache';
    }

}
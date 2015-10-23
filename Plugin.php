<?php namespace Stone\TwigExtend;

use System\Classes\PluginBase;

/**
 * TwigExtend Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'TwigExtend',
            'description' => 'Adds extra custom filters for twig',
            'author'      => 'Stone',
        ];
    }

  public function registerMarkupTags()
  {
    return [
      'filters' => [
        'truncate' => function($value, $length = 30, $separator = '...') {
          if (strlen($value) > $length) {
            return rtrim(substr($value, 0, $length)) . $separator;
          }
          return $value;
        },
      ]
    ];
  }

}

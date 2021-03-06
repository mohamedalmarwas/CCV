<?php
namespace CCV\Configuration;

use Symfony\Component\Config\Loader\FileLoader;
use Symfony\Component\Yaml\Yaml;

class TranslationLoader extends FileLoader {
    public function load($resource, $type = null) {
        $config = Yaml::parse($resource);
        return $config;
    }

    public function supports($resource, $type = null)
    {
        return is_string($resource) && 'yml' === pathinfo(
            $resource,
            PATHINFO_EXTENSION
        );
    }
}
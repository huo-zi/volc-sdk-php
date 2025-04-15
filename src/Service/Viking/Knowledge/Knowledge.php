<?php

namespace Volc\Service\Viking\Knowledge;

use Volc\Base\V4Curl;
use Volc\Service\Viking\Knowledge\KnowledgeConfig;

class Knowledge extends V4Curl
{

    protected $config;

    protected $apiList = [];

    public function __construct()
    {
        $this->apiList = KnowledgeConfig::$apiList;
        $this->config = KnowledgeConfig::$region;

        parent::__construct(func_get_arg(0));
    }

    public function getConfig(string $region)
    {
        if (isset($this->config[$region])) {
            return $this->config[$region];
        }

        throw new \Exception(sprintf("Knowledge not support region, %s", $region));
    }

    public function setConfig($config)
    {
        $this->config = $config;
        return $this;
    }

    public function collections($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }

    public function collectionInfo($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }

    public function collectionCreate($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }

    public function collectionUpdate($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }

    public function collectionDelete($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }

    public function searchKnowledge($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }

    public function chatCompletions($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }

    public function docAdd($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }
    public function docInfo($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }

    public function docList($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }

    public function docUpdateMeta($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }

    public function docDelete($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }
    public function pointList($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }

    public function pointUpdate($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }

    public function pointInfo($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }

    public function pointAdd($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }

    public function pointDelete($config = [])
    {
        return $this->request(__FUNCTION__, $config);
    }

    public function __call($name, $arguments)
    {
        if (isset($this->apiList[$name])) {
            return $this->request($name, $arguments[0]);
        }
        throw new \Exception(sprintf("Knowledge not support api: %s", $name));
    }
}
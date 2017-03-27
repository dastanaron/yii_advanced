<?php

namespace common\components;

class MultiSite {
    
    public $frontend;
    public $backend;
    
    public function getFrontend() {
        return $this->frontend;
    }
    
    public function getBackend() {
        return $this->backend;
    }
    
}
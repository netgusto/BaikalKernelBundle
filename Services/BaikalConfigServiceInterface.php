<?php

namespace Baikal\KernelBundle\Services;

interface BaikalConfigServiceInterface {
    public function getServerTimezone();
    public function getEnable_api();
}
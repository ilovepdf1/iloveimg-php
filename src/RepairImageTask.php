<?php

namespace Iloveimg;
/**
 * Class RepairTask
 *
 * @package Iloveimg
 */
class RepairImageTask extends ImageTask
{

    /**
     * RepairTask constructor.
     * @param string $publicKey
     * @param string $secretKey
     */
    function __construct($publicKey, $secretKey, $makeStart = true)
    {
        $this->tool = 'repairimage';
        parent::__construct($publicKey, $secretKey, $makeStart);
    }
}

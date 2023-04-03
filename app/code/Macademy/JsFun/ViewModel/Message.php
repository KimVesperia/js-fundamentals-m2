<?php declare(strict_types=1);
/**
* @author Kim Phung - BURO210
* @copyright Copyright © 2023 BURO210. All rights reserved.
* @package Macademy\JsFun\ViewModel
*/

namespace Macademy\JsFun\ViewModel;

/**
* Class Message
* @package Macademy\JsFun\ViewModel\Message
*/
Class Message implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
    * Get message
    * @return string
    */
    public function getMessage()
    {
        return str_shuffle('Declarative test');
    }
}
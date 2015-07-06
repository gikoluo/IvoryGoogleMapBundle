<?php

/*
 * This file is part of the Ivory Google Map bundle package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Giko\BaiduMapBundle\Tests\Entity;

use Giko\BaiduMapBundle\Entity\PanControl;

/**
 * Pan control entity test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class PanControlTest extends \PHPUnit_Framework_TestCase
{
    public function testInheritance()
    {
        $this->assertInstanceOf('Ivory\GoogleMap\Controls\PanControl', new PanControl());
    }
}

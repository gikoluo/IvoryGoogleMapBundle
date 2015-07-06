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

use Giko\BaiduMapBundle\Entity\Size;

/**
 * Size entity test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class SizeTest extends \PHPUnit_Framework_TestCase
{
    public function testInheritance()
    {
        $this->assertInstanceOf('Ivory\GoogleMap\Base\Size', new Size());
    }
}

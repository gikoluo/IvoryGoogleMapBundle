<?php

/*
 * This file is part of the Ivory Google Map bundle package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Giko\BaiduMapBundle\Tests\Helper;

use Giko\BaiduMapBundle\Helper\TemplateHelper;

/**
 * Template helper test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class TemplateHelperTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Giko\BaiduMapBundle\Helper\TemplateHelper */
    protected $templateHelper;

    /** @var \Ivory\GoogleMap\Helper\MapHelper */
    protected $mapHelperMock;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->mapHelperMock = $this->getMock('Ivory\GoogleMap\Helper\MapHelper');
        $this->templateHelper = new TemplateHelper($this->mapHelperMock);
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->templateHelper);
        unset($this->mapHelperMock);
    }

    public function testInitialState()
    {
        $this->assertInstanceOf('Symfony\Component\Templating\Helper\Helper', $this->templateHelper);
        $this->assertSame('giko_baidu_map', $this->templateHelper->getName());
    }

    public function testRenderMap()
    {
        $map = $this->getMock('Ivory\GoogleMap\Map');

        $this->mapHelperMock
            ->expects($this->once())
            ->method('render')
            ->with($map)
            ->will($this->returnValue('foo'));

        $this->assertSame('foo', $this->templateHelper->renderMap($map));
    }

    public function testRenderHtmlContainer()
    {
        $map = $this->getMock('Ivory\GoogleMap\Map');

        $this->mapHelperMock
            ->expects($this->once())
            ->method('renderHtmlContainer')
            ->with($map)
            ->will($this->returnValue('foo'));

        $this->assertSame('foo', $this->templateHelper->renderHtmlContainer($map));
    }

    public function testRenderStylesheets()
    {
        $map = $this->getMock('Ivory\GoogleMap\Map');

        $this->mapHelperMock
            ->expects($this->once())
            ->method('renderStylesheets')
            ->with($map)
            ->will($this->returnValue('foo'));

        $this->assertSame('foo', $this->templateHelper->renderStylesheets($map));
    }

    public function testRenderJavascripts()
    {
        $map = $this->getMock('Ivory\GoogleMap\Map');

        $this->mapHelperMock
            ->expects($this->once())
            ->method('renderJavascripts')
            ->with($map)
            ->will($this->returnValue('foo'));

        $this->assertSame('foo', $this->templateHelper->renderJavascripts($map));
    }
}

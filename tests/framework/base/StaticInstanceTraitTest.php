<?php

namespace yiiunit\framework\base;

use yiiunit\data\base\Singer;
use yiiunit\data\base\Speaker;
use yiiunit\TestCase;

class StaticInstanceTraitTest extends TestCase
{
    public function testInstance()
    {
        $speakerModel = Speaker::instance();
        $this->assertTrue($speakerModel instanceof Speaker);

        $singerModel = Singer::instance();
        $this->assertTrue($singerModel instanceof Singer);

        $this->assertSame($speakerModel, Speaker::instance());
        $this->assertNotSame($speakerModel, Speaker::instance(true));
    }
}
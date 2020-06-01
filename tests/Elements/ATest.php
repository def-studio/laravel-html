<?php

namespace DefStudio\Html\Test\Elements;

use DefStudio\Html\Elements\A;
use DefStudio\Html\Test\TestCase;

class ATest extends TestCase
{
    /** @test */
    public function it_can_create_an_a_element()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<a></a>',
            A::create()
        );
    }

    /** @test */
    public function it_can_create_an_a_element_with_a_href()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<a href="https://spatie.be"></a>',
            A::create()->href('https://spatie.be')
        );
    }
}

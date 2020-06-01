<?php

namespace DefStudio\Html\Test\Html;

class ModelFormTest extends TestCase
{
    /** @test */
    public function it_can_create_a_form_from_a_model()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<form method="POST">'.
                '<input name="_token" type="hidden" value="abc">'.
            '</form>',
            $this->html->modelForm([])
        );
    }
}

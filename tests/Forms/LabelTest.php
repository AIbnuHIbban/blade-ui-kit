<?php

declare(strict_types=1);

namespace Tests\Forms;

use Tests\ComponentTestCase;

class LabelTest extends ComponentTestCase
{
    /** @test */
    public function its_component_can_be_rendered()
    {
        $expected = <<<HTML
<label for="first_name" >
    First name
</label>
HTML;

        $this->assertComponentRenders($expected, '<x-label for="first_name"/>');
    }
}
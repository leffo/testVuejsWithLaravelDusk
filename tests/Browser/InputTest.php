<?php

namespace Tests\Browser;

use Tests\Browser\Pages\InputTelefonPage;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class InputTest extends DuskTestCase
{
    public function test_input_value_with_mask()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('input')
                    ->clickLink('input');

            $browser->on(new InputTelefonPage())
                    ->type('@input-phone', '1112223344')
                    ->assertInputValue('@input-phone','(111) 222-33-44');
        });
    }
}

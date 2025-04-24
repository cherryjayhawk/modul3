<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group note-create
     */
    public function testCreateNotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email', 'user@gmail.com')
                    ->type('password', 'password')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
                    ->clickLink('Notes')
                    ->clickLink('Create Note')
                    ->assertPathIs('/create-note')
                    ->type('title', 'example note yuhuuu')
                    ->type('description', 'deskripsi notes oyee')
                    ->press('CREATE')
                    ->assertPathIs('/notes');
        });
    }

        /**
     * A Dusk test example.
     * @group note-edit
     */
    public function testEditNotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email', 'user@gmail.com')
                    ->type('password', 'password')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
                    ->clickLink('Notes')
                    ->clickLink('Edit')
                    ->assertPathIs('/edit-note-page/2')
                    ->type('title', 'example note yuhuuu edit')
                    ->type('description', 'deskripsi notes oyee edit')
                    ->press('UPDATE')
                    ->assertPathIs('/notes');
        });
    }
}

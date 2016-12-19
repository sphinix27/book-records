<?php

use App\User;
use App\Denounced;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AddNewDenouncedTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function can_add_new_denounced()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
        	 ->visit('/denounceds/create')
        	 ->type('Abel', 'firstname')
        	 ->type('Barrientos', 'lastname')
        	 ->type('5683688', 'ci')
        	 ->press('Save');

        $this->assertEquals(1, Denounced::count());
        $this->seeInDatabase('denounceds', [
        	'firstname' => 'Abel',
        	'lastname' => 'Barrientos',
        	'ci' => '5683688'
        ]);
    }

    /** @test */
    function validate_when_adding_a_new_denounced()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->visit('/denounceds/create')
            ->press('Save');

        $this->see(trans('validation.required', ['attribute' => 'firstname', 'attribute' => 'lastname', 'attribute' => 'ci']));
    }
}

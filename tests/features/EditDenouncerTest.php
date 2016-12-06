<?php
use App\User;
use App\Denouncer;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditDenouncerTest extends TestCase
{
	use DatabaseMigrations;

    /** @test */
    function can_edit_a_denouncer()
    {
        $user = factory(User::class)->create();

        $denouncer = factory(Denouncer::class)->create();

        $this->actingAs($user)
        	 ->visit('/denouncers/'.$denouncer->id.'/edit')
        	 ->see($denouncer->firstname)
        	 ->see($denouncer->lastname)
        	 ->see($denouncer->ci)
        	 ->type('Abel', 'firstname')
        	 ->type('Barrientos', 'lastname')
        	 ->type('5683688', 'ci')
        	 ->press('Save');

        $this->seeInDatabase('denouncers', [
        	'firstname' => 'Abel',
        	'lastname' => 'Barrientos',
        	'ci' => '5683688'
        ]);
    }

    /** @test */
    public function validate_when_editing_denouncer()
    {
        $user = factory(User::class)->create();

        $denouncer = factory(Denouncer::class)->create();

        $this->actingAs($user)
            ->visit('/denouncers/'.$denouncer->id.'/edit')
            ->see($denouncer->firstname)
        	->see($denouncer->lastname)
        	->see($denouncer->ci)
        	->type('', 'firstname')
        	->type('', 'lastname')
        	->type('', 'ci')
            ->press('Save');

        $this->see(trans('validation.required', ['attribute' => 'firstname', 'attribute' => 'lastname', 'attribute' => 'ci']));
    }
}

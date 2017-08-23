<?php

namespace Tests\Browser;

use App\Task;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ToDoListTest extends DuskTestCase
{
    /**
     * Create a Task
     *
     * @return void
     */
    public function testCreateTask()
    {
      $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->click('#addTask')
            ->type('name', 'Test Task')
            ->type('description', 'Test Description')
            ->press('Create')
            ->assertSee('Test Task')
            ->assertPathIs('/task');
      });
    }

    /**
     * See a Task
     *
     * @return void
     */
    public function testTaskDetails()
    {
      $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Test Task')
            ->assertSee('Test Task')
            ->assertSee('Test Description');
      });
    }

    /**
     * Update a Task
     *
     * @return void
     */
    public function testUpdateTask()
    {
      $this->browse(function (Browser $browser) {
            $task =  Task::where('name','Test Task')->first();
            $browser->visit('/')
            ->click("#edit_$task->id")
            ->type('name', 'Test Task Updated')
            ->press('Update')
            ->assertSee('Test Task Updated')
            ->assertPathIs('/task');
      });
    }

    /**
     * Delete a Task
     *
     * @return void
     */
    public function testDeleteTask()
    {
      $this->browse(function (Browser $browser) {
            $task =  Task::where('name','Test Task Updated')->first();
            $browser->visit('/')
            ->click("#remove_$task->id")
            ->assertDontSee('Test Task Updated')
            ->assertPathIs('/task');
      });
    }

}

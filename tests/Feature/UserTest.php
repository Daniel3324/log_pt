<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
      
    /**
    *@testdox Create user through Restfull    */
    public function testCreateUser()
    {
        $this->withoutExceptionHandling();
        
        $this->post('/userlog', [
            'name' => 'Ricardo Gomes',
            'email' => 'ricardogomes@hotmail.com',
            'birthday' => '2002-11-20',
            'gender' => 'M',
        ])->assertStatus(200);;
    }
    
    /**
    *@testdox Update user through Restfull    */
    public function testUpdateUser()
    {
        $this->withoutExceptionHandling();
        
        $this->post('/userlog/1', [
            'name' => 'Ricardo Gomes',
            'email' => 'ricardogomes@hotmail.com',
            'birthday' => '2002-11-20',
            'gender' => 'M',
        ])->assertStatus(200);
    }
    
    /**
    *@testdox Show all user through Restfull    */
    public function testShowAll()
    {
        $this->get('/userlog')->assertStatus(200);
    }
    
    /**
    *@testdox Show one user through Restfull    */
    public function testShowUser()
    {
        $this->get('/userlog/1')->assertStatus(200);
    }
    
    /**
    *@testdox Delete one user through Restfull    */
    public function testDeleteUser()
    {
        $this->delete('/userlog/1')->assertStatus(200);
    }
}

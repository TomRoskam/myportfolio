<?php

namespace Tests\Feature;

use Tests\TestCase;
use \App\Courses;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class courseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndexViewHasAvailableCourses()
    {
        $response = $this->get('/progress');

        $response->assertStatus(200);
        $response->assertViewIs('progress.index');
        $response->assertViewHas('progress');
    }

    public function testItWritersGoodFormToDatabaseAndRedirectsToIndex()
    {
        $token = 'covfefe';
        $toets = "hoi";
        $cijfer = "hier";
        $EC_waarde = "10";

        $response = $this
            ->withSession(['_token' => $token])
            ->post(
                '/progress',
                [
                    '_token' => $token,
                    'toets' => $toets,
                    'cijfer' => $cijfer,
                    'EC_waarde' => $EC_waarde
                ]
            );

        $this->assertDatabaseHas(
            'courses',
            [
                'toets' => $toets,
                'cijfer' => $cijfer,
                'EC_waarde' => $EC_waarde

            ]
        );

        $response->assertStatus(302);
        $response->assertRedirect('/progress');
    }

    public function testDeleteMethod() {
        // Arrange
        $courses = Courses::where('toets', 'hoi' )->first();

        // Act
        $response = $this->call('DELETE', '/progress/' . $courses->id, ['_token' => csrf_token()]);

        // Assert
        $this->assertEquals(302, $response->getStatusCode());

         //Check redirect to index
        $response->assertRedirect('progress');
        $this->assertDatabaseMissing('courses', [
            'id' => $courses->id
        ]);
    }
}
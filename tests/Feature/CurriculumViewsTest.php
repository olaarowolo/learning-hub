<?php

namespace Tests\Feature;

use Tests\TestCase;

class CurriculumViewsTest extends TestCase
{
    /**
     * Test Britain curriculum layout pages.
     *
     * @return void
     */
    public function testBritainCurriculumLayouts()
    {
        $response = $this->get('/test-br-layout');
        $response->assertStatus(200);
        $response->assertSee('Test Britain Curriculum Layout');
        $response->assertSee('Year 1 English');
        $response->assertSee('Year 1 Maths');
    }

    /**
     * Test Nigerian curriculum layout pages.
     *
     * @return void
     */
    public function testNigerianCurriculumLayouts()
    {
        $response = $this->get('/test-ng-layout');
        $response->assertStatus(200);
        $response->assertSee('Test Nigeria Curriculum Layout');
        $response->assertSee('Primary 1 English');
        $response->assertSee('Primary 1 Maths');
    }

    /**
     * Test navigation links and layout inheritance.
     *
     * @return void
     */
    public function testNavigationAndLayout()
    {
        $response = $this->get('/test-br-layout');
        $response->assertSee('Key Stages');
        $response->assertSee('Safeguarding');
        $response->assertSee('Learning Hub');

        $response = $this->get('/test-ng-layout');
        $response->assertSee('Key Stages');
        $response->assertSee('Safeguarding');
        $response->assertSee('Learning Hub');
    }
}

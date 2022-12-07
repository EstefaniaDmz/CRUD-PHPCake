<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VueloTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VueloTable Test Case
 */
class VueloTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VueloTable
     */
    protected $Vuelo;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Vuelo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Vuelo') ? [] : ['className' => VueloTable::class];
        $this->Vuelo = $this->getTableLocator()->get('Vuelo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Vuelo);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VueloTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

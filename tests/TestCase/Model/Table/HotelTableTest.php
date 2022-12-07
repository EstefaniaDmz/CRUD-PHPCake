<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HotelTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HotelTable Test Case
 */
class HotelTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HotelTable
     */
    protected $Hotel;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Hotel',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Hotel') ? [] : ['className' => HotelTable::class];
        $this->Hotel = $this->getTableLocator()->get('Hotel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Hotel);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\HotelTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

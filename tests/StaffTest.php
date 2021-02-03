<?php

use PHPUnit\Framework\TestCase;

class StaffTest extends TestCase
{
    public function testReturnsFullName()
    {
        require('Staff.php');

        $staff = new Staff;

        $staff->first_name = "Trung1";
        $staff->last_name = "Vo";

        $this->assertEquals('Trung1 Vo', $staff->getFullName());
    }
    public function testFullNameIsEmptyByDefault()
    {
        $staff = new Staff;
        $this->assertEquals('', $staff->getFullName());
    }

    /**
     * @test
     */
    public function only_first_name()
    {
        $staff = new Staff;
        $staff->first_name = "Doanh";
        $this->assertEquals('Doanh', $staff->getFullName());
    }
}

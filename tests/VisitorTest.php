<?php

use Behavioral\Visitor\User;
use Behavioral\Visitor\Group;
use PHPUnit\Framework\TestCase;
use Behavioral\Visitor\RoleVisitor;

class VisitorTest extends TestCase {

    /** @var RoleVisitor */
    private $visitor;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->visitor = new RoleVisitor();
    }

    public function provideRoles()
    {
        return [
            [new User('Gary')],
            [new Group('Admins')]
        ];
    }

    /**
     * @test
     * @dataProvider provideRoles
     * @param $role
     */
    function visit_some_role($role)
    {
        $role->accept($this->visitor);

        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}
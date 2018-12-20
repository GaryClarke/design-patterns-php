<?php

namespace Behavioral\Visitor;

class RoleVisitor implements RoleVisitorInterface {

    /** @var Role[] */
    private $visited = [];

    public function visitUser(User $role)
    {
        $this->visited[] = $role;
    }

    public function visitGroup(Group $role)
    {
        $this->visited[] = $role;
    }

    /**
     * @return Role[]
     */
    public function getVisited(): array
    {
        return $this->visited;
    }
}
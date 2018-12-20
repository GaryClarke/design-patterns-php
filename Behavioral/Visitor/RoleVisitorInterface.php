<?php

namespace Behavioral\Visitor;

interface RoleVisitorInterface {

    public function visitUser(User $user);

    public function visitGroup(Group $group);
}
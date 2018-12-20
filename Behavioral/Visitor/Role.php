<?php

namespace Behavioral\Visitor;

interface Role {

    public function accept(RoleVisitorInterface $visitor);
}
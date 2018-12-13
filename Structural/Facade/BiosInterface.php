<?php

namespace Structural\Facade;

interface BiosInterface {

    public function execute();

    public function waitForKeypress();

    public function launch(OsInterface $os);

    public function powerDown();
}
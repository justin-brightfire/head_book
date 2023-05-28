<?php

namespace MG\Service;

interface GumballMachineInterface
{
    public function getCount(): int;

    public function getLocation(): string;

    public function getState(): string;
}
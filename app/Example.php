<?php

namespace App;

class Example
{
    protected $collaborator;
     
    public function __constructor(Collaborator $collaborator)
    {
        $this->collaborator = $collaborator;
    }
}
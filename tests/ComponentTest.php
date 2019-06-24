<?php
//----------------------------------------------------------------------------
//
//----------------------------------------------------------------------------

namespace Jaypha\Jayponents;

use PHPUnit\Framework\TestCase;

class ComponentTest extends TestCase
{
  function testEmpty()
  {
    $c = new Component();
    $this->assertEquals("", $c);
  }

  function testAdd()
  {
    $c = new Component();
    $c->add("a");
    $c->add("bcd");
    $c->add(5);
    $this->assertEquals("abcd5", $c);
  }

  function testSet()
  {
    $c = new Component();
    $c->setTemplate(__DIR__."/template1.tpl");
    $c->set("abc", "tent");
    $c->set("mon", "nom");

    // Important to note that the template file does end with a newline.
    // This may not appear in some text editors.
    $this->assertEquals("123tentxyznom.\n", $c);
  }

  function testNested()
  {
    $y = new Component();
    $y->add("pokemon");
    $y->add("poketop");
    
    $c = new Component();
    $c->setTemplate(__DIR__."/template1.tpl");
    $c->setVars([ "abc" => "19", "mon" => $y ]);
    $this->assertEquals("12319xyzpokemonpoketop.\n", $c);
  }

  function testStringOverFunction()
  {
    $y = new Component();
    $y->add("next");
    $this->assertEquals("next", $y->__toString());
  }
}

//----------------------------------------------------------------------------
// Copyright (C) 2018 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//

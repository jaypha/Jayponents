<?php
//----------------------------------------------------------------------------
//
//----------------------------------------------------------------------------

namespace Jaypha\Jayponents;

use PHPUnit\Framework\TestCase;

class TextComponentTest extends TestCase
{
  protected $template;

  function setUp()
  {
    $this->template = "123<?=\$abc?>xyz<?=\$mon?>.";
  }

  function testEmpty()
  {
    $c = new TextComponent();
    $this->assertEquals("", $c);
  }

  function testSet()
  {
    $c = new TextComponent();
    $c->setTemplate($this->template);
    $c->set("abc", "tent");
    $c->set("mon", "nom");
    $this->assertEquals("123tentxyznom.", $c);
  }

  function testNested()
  {
    $y = new Component();
    $y->add("pokemon");
    $y->add("poketop");
    
    $c = new TextComponent();
    $c->setTemplate($this->template);
    $c->setVars([ "abc" => "19", "mon" => $y ]);
    $this->assertEquals("12319xyzpokemonpoketop.", $c);
  }
}

//----------------------------------------------------------------------------
// Copyright (C) 2018 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//

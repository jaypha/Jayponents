<?php
//----------------------------------------------------------------------------
//
//----------------------------------------------------------------------------

namespace Jaypha\Jayponents;

use PHPUnit\Framework\TestCase;

class PhpFileAdaptorTest extends TestCase
{
  protected $template;

  function testSet()
  {
    $c = new Component();
    $c->setEngine(new PhpFileAdaptor());
    $c->setTemplate(__DIR__."/template1.tpl");
    $c->set("abc", "tent");
    $c->set("mon", "nom");

    // Important to note that the template file does end with a newline.
    // This may not appear in some text editors.
    $this->assertEquals("123tentxyznom.\n", $c);
  }
}

//----------------------------------------------------------------------------
// Copyright (C) 2019 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//

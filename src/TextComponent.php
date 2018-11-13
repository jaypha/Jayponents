<?php
//----------------------------------------------------------------------------
// Text component
//----------------------------------------------------------------------------

namespace Jaypha\Jayponents;

class TextComponent extends Component
{
  function __construct()
  {
    $this->setEngine(new PhpTextAdaptor());
  }
}

//----------------------------------------------------------------------------
// Copyright (C) 2017 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//

<?php
//----------------------------------------------------------------------------
// Adaptor to interface with template engines.
//----------------------------------------------------------------------------

namespace Jaypha\Jayponents;

interface TemplateEngineAdaptor
{
  function render(Component $component);
}

//----------------------------------------------------------------------------
// Copyright (C) 2018 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//

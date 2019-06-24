<?php
//----------------------------------------------------------------------------
// Adaptor for PHP base template files
//----------------------------------------------------------------------------

namespace Jaypha\Jayponents;

class PhpFileAdaptor implements TemplateEngineAdaptor
{
  function render($component)
  {
    // Get the layout from a text template
    extract($component->getVars());
    include($component->getTemplate());
  }
}

//----------------------------------------------------------------------------
// Copyright (C) 2018 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//

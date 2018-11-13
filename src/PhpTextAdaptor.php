<?php
//----------------------------------------------------------------------------
// Adaptor for PHP base template strings
//----------------------------------------------------------------------------

namespace Jaypha\Jayponents;

// Treats the template string as the actual template itself, rather than a
// filename.

class PhpTextAdaptor implements TemplateEngineAdaptor
{
  function render($component)
  {
    // Get the layout from a text template
    extract($component->getVars());
    $template = $component->getTemplate();
    eval("?>$template");
  }
}

//----------------------------------------------------------------------------
// Copyright (C) 2018 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//

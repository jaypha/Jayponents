<?php
//----------------------------------------------------------------------------
// Doument Builder
//----------------------------------------------------------------------------

namespace Jaypha\Jayponents;

class Component
{
  protected static $_defaultAdaptor = null;
  static function setDefaultEngine(TemplateEngineAdaptor $a) { self::$_defaultAdaptor = $a; }

  protected $_template = null;
  protected $_vars = [];
  protected $_adaptor = null;

  function setEngine(TemplateEngineAdaptor $a) { $this->_adaptor = $a; }

  function setTemplate(?string $t = null)  { $this->_template = $t; }
  function getTemplate()  { return $this->_template; }

  function setVars(array $v) { $this->_vars = $v; }
  function getVars() { return $this->_vars; }

  function add($v) { $this->_vars[] = $v; }
  function set(string $p, $v) { $this->_vars[$p] = $v; }
  function get($p) { return $this->_vars[$p]; }
  function remove(string $p)  { unset($this->_vars[$p]); }
  function clear() { $this->_vars = []; }

  //-----------------------------------

  function display() { $this->displayInner(); }

  // This mechanism allows two stage display
  protected function displayInner() {
    if ($this->_template)  {
      // Get the layout from a template file
      if ($this->_adaptor !== null)
        $this->_adaptor->render($this);
      else if (self::$_defaultAdaptor)
        self::$_defaultAdaptor->render($this);
      else
      {
        extract($this->_vars);
        include($this->_template);
      }
    }
    else {
      // Echo each child in order
      foreach ($this->_vars as &$child)
        $this->displayChild($child);
    }
  }

  protected function displayChild($child)
  {
    if ($child instanceof Component)
      $child->display();
    else if (is_iterable($child))
      foreach ($child as $v)
        $this->displayChild($v);
    else if (is_callable($child))
      echo $child();
    else
      echo $child;
  }

  //-----------------------------------

  function __toString() {
    ob_start();
    $this->display();
    return ob_get_clean();
  }
}

//----------------------------------------------------------------------------
// Copyright (C) 2017 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//

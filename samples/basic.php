<?php
//----------------------------------------------------------------------------
//
//----------------------------------------------------------------------------

use \Jaypha\Component;

require "../vendor/autoload.php";

$page = new Component("template.tpl");
$page->set("title", "User Profile");

$content = new Component(
  "profile.tpl",
);
$content->setVars([ "name" => "Jonathon", "word" => "ser&pity" ]);

$page->set("content", $content);
$page->display();

//echo $page;

//----------------------------------------------------------------------------
// Copyright (C) 2017 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//

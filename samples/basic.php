<?php
//----------------------------------------------------------------------------
//
//----------------------------------------------------------------------------

use Jaypha\Jayponents\Component;

require "../vendor/autoload.php";

$page = new Component();
$page->setTemplate("template.tpl");
$page->set("title", "User Profile");

$content = new Component();
$content->setTemplate("profile.tpl");
$content->setVars([ "name" => "Jonathon", "word" => "ser&pity" ]);

$page->set("content", $content);
$page->display();

//echo $page;

//----------------------------------------------------------------------------
// Copyright (C) 2017 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//

<?php

namespace App;

class Helpers
{
  function setActive($path)
  {
    return Request::is($path . '*') ? ' class=active' :  '';
  }
}
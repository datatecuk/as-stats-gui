<?php

namespace Application;
use Application\ConfigApplication as ConfigApplication;
use Silex\Application;

class DbsProvider
{
  public function Get() {
    $db = array();
    $dbs = ConfigApplication::getDbFile();

    foreach ($dbs as $key => $val)
    {
        $db[$key] = $val;
        $db[$key]['driver'] = 'pdo_sqlite';
    }
    
    return $db;
  }
}

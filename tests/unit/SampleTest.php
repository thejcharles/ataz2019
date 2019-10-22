<?php

use App\Models\User;
use PHPUnit\Framework\TestCase;
use Illuminate\Database\Capsule\Manager as Capsule;

class SampleTest extends PHPUnit\Framework\TestCase
{
  public function testWillGetUser()
{
  $actual = getSum(2, 4);
  $expected = 6;
  $this->assertEquals($expected, $actual);
}

public function willHandleLogin() : void
{

}
}

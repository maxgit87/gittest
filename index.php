<?php
echo 'hello from php';

$obj = new MyClass();
$obj->myfct();

class MyClass
{
	public function myfct()
	{
		return true;
	}
}
?>
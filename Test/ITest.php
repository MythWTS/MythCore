<?php
namespace Test;
/**
 * Interface ITest
 * base interface for all tests in the framework
 */
interface ITest{
	/** Run the test and return whether it was in overall successfull or not */
	public function Run();
};
?>
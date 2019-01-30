<?php 
class StringError extends Exception{

}
class arrayError extends Exception{

}
class check{
	public function __construct($filename,$someString,$someArray)
	{
		try{
			if(file_exists($filename))
				throw new Exception("File does not exist", 1);
			echo 'here';
				if(!is_string($someString))
				{
					throw new StringError("That is not a string", 1);
					
				}
				if(!is_array($someArray))
				{
					throw new arrayError("Должен быть передан массив, передано {$someArray}", 1);
					
				}

		}
		catch(StringError $ex)
		{
			echo $ex->getMessage();
		}
		catch(arrayError $ex)
		{
			echo $ex->getMessage();
		}
	}
}
$someObj = new check('filename.php','34',45);
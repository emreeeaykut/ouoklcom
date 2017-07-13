<?
	
	function upload($key){
		$uploadDir  = $_SERVER['DOCUMENT_ROOT'] . '/stildoor/uploaded_files/';

		$fileTypes = array('jpeg', 'gif', 'png', 'jpg');

		// $verifyToken = md5('hede123' . $_POST['timestamp']);
		$video = false;
		
		if (!empty($_FILES) && $_FILES[$key]["name"] != "") {	
		
			$time = microtime();

			$tempFile   = $_FILES[$key]['tmp_name'];

			$fileParts = pathinfo($_FILES[$key]['name']);

			$targetFile = $uploadDir . md5($time . "ebelebe") . "." . $fileParts['extension'];
			
			// Validate the filetype
			// if (in_array(strtolower($fileParts['extension']), $fileTypes)) {
				move_uploaded_file($tempFile, $targetFile);
				$video = md5($time . "ebelebe") . "." . $fileParts['extension'];
			// }
		}

		return $video;
	}

?>
<?php 
class Upload {

				private $_supportedFormats = ['JPEG','pdf', 'PDF','jpeg','PNG','png','JPG','jpg','image/png', 'image/jpg', 'image/gif', 'image/jpeg','image/JPG', 'image/JPEG', 'image/PNG'];

				private $_supportedFormatsDOCS = ['application/pdf','application/PDF','pdf','PDF', 'application/docx', 'docx'];


				public function uploadFile($file){
					if (is_array($file)) {
						//continue


						if(in_array($file['type'],$this->_supportedFormats)){

						move_uploaded_file($file['tmp_name'],'uploads/'.$file['name']);
						
						echo 'File was uploaded Successfully!';
						
						} else {

							die('File Fomat is not supported');
						}

					} else {

						die('file was not Uplaoded');
					}
				}


				public function uploadDOCS($category, $file){
					
					
					if (is_array($file)) {
						//continue


						if(in_array($file['type'],$this->_supportedFormatsDOCS)){

						move_uploaded_file($file['tmp_name'],'kiosk/'.$category.'/'.$file['name']);
						
						echo 'File was uploaded Successfully!';
						
						} else {

							die('File Format is not supported');
						}

					} else {

						die('file was not Uplaoded');
					}
				}


				public function uploadStaffPhoto($file){
					
					if (is_array($file)) {
						//continue


						if(in_array($file['type'],$this->_supportedFormats)){

						move_uploaded_file($file['tmp_name'],'images/staff/'.$file['name']);
						
						echo 'File was uploaded successfully!';
						
						} else {

							die('File Format is not supported');
						}

					} else {

						die('file was not uplaoded!');
					}
				}

					public function uploadKioskDOCS($file){
					$category = Input::get('category');
					if (is_array($file)) {
						//continue


						if(in_array($file['type'],$this->_supportedFormatsDOCS)){

						move_uploaded_file($file['tmp_name'],'kiosk/'.$category.'/'.$file['name']);
						
						echo 'File was uploaded Successfully!';
						
						} else {

							die('File Fomat is not supported');
						}

					} else {

						die('file was not Uplaoded');
					}
				}



}
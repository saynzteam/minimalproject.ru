<!-- https://oauth.vk.com/blank.html#access_token=75c9cdd020ca013cc1d05dd63a2b919d1abc1f5d0b90e0370faf99633758948d5e11d9d7709a2f8e3d8b6&expires_in=86400&user_id=451884033 -->
<?php

// $group_id     = '7949427';
// $access_token = '75c9cdd020ca013cc1d05dd63a2b919d1abc1f5d0b90e0370faf99633758948d5e11d9d7709a2f8e3d8b6';
// $message      = 'Живые!';
// $image        = __DIR__ . '/logo.png';
 
// // Получение сервера vk для загрузки изображения.
// $server = file_get_contents('https://api.vk.com/method/photos.getWallUploadServer?group_id=' . $group_id . '&access_token=' . $access_token . '&v=5.00');
// $server = json_decode($server);
 
// if (!empty($server->response->upload_url)) {
// 	// Отправка изображения на сервер.
// 	if (function_exists('curl_file_create')) {
// 		$curl_file = curl_file_create($image);
// 	} else {
// 		$curl_file = '@' . $image;
// 	}
 
// 	$ch = curl_init();
// 	curl_setopt($ch, CURLOPT_URL, $server->response->upload_url);
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 	curl_setopt($ch, CURLOPT_POST, 1);
// 	curl_setopt($ch, CURLOPT_POSTFIELDS, array('photo' => $curl_file));
// 	$upload = curl_exec($ch);
// 	curl_close($ch);
 
// 	$upload = json_decode($upload);
// 	if (!empty($upload->server)) {
// 		// Сохранение фото в группе.
// 		$save = file_get_contents('https://api.vk.com/method/photos.saveWallPhoto?group_id=' . $group_id . '&server=' . $upload->server . '&photo=' . stripslashes($upload->photo) . '&hash=' . $upload->hash . '&access_token=' . $access_token . '&v=5.00');
// 		$save = json_decode($save);
// 		if (!empty($save->response[0]->id)) {
// 			// Отправляем сообщение.
// 			$params = array(
// 				'v'            => '5.126',
// 				'access_token' => $access_token,
// 				'owner_id'     => '-' . $group_id, 
// 				'from_group'   => '1', 
// 				'message'      => $message,
// 				'attachments'  => 'photo' . $save->response[0]->owner_id . '_' . $save->response[0]->id
// 			);
			
// 			file_get_contents('https://api.vk.com/method/wall.post?' . http_build_query($params));
// 		}
// 	}
// }

// $group_id     = '7949427';
// $access_token = '75c9cdd020ca013cc1d05dd63a2b919d1abc1f5d0b90e0370faf99633758948d5e11d9d7709a2f8e3d8b6';
// $message      = 'Живые!';
// $link         = 'minimalproject.ru';
 
// // Отправляем сообщение.
// $params = array(
// 	'v'            => '5.126',
// 	'access_token' => $access_token,
// 	'to_id'     => '-' . $group_id, 
// 	'from_group'   => '1', 
// 	'message'      => $message,
// 	'attachments'  => $link
// );
 
// file_get_contents('https://api.vk.com/method/wall.post?' . http_build_query($params));

// echo('https://api.vk.com/method/wall.post?owner_id=-177241194&form_group=1&scope=wall&message=123&v=5.130&attachment=photo-177241194_457240182&access_token=6dc9808c9b9c54c1d3fa82988ee9d539c4a3f85878663418de0619337edef0a13d05f399837ccdbe900f4
// ')
 

?>


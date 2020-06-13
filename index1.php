<?php
	$phone="0372898819";
	$email = "$phone@gmail.com";
	echo "$email";
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_HTTPHEADER, array("Cookie:34a08059baa83cd2f47e9432c93c660d=gg27i3626lhgd3so45dia55i41; cookie_id=3oqaHaKpVJsqSODkuw; zchat=yes; zchat_closed=yes"));
	curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://minhcaumart.vn/dang-ky-tai-khoan.html?task=registration.register',
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:52.0) Gecko/20100101 Firefox/52.0',
    CURLOPT_POST => 1,
    CURLOPT_SSL_VERIFYPEER => false, //Bỏ kiểm SSL
    CURLOPT_POSTFIELDS => http_build_query(array(
        'jform[name]' => "MRX13",
		'jform[username]' => "$phone",
		'jform[password1]' => "mrx13null",
		'jform[email1]' => "$email",
		'option' => "com_users",
		
		'd64b38e239f2c20460cea63357865ecf' => "1"
		))
	));
	$resp = curl_exec($curl);
	curl_close($curl);
	
?>
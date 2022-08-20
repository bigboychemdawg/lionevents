<?php 
function send_to_googledoc()
{
$url = "https://docs.google.com/forms/u/0/d/e/1FAIpQLSdURd_DBaTl8RJHuJ4JxVGEqC070U0CIUo6tBF13X29wbo4lg/formResponse";

$post_data = array (
 "entry.1248113865" => $_POST['phone'],
 "draftResponse" => "[,,&quot;8674350293304070463&quot;]",
 "pageHistory" => "0",
 "fbzx" => "8674350293304070463"
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch); 
}
send_to_googledoc();
echo 'Успех';
}
<?php
//coded by Momos
//recode kepala kau
system('clear');
echo "


_ _  _ ____ ___ ____    ___  ____ _ _ _ _  _ _    ____ ____ ___  ____ ____ 
| |\ | [__   |  |__| __ |  \ |  | | | | |\ | |    |  | |__| |  \ |___ |__/ 
| | \| ___]  |  |  |    |__/ |__| |_|_| | \| |___ |__| |  | |__/ |___ |  \ 
              Instagram Generate IMAGE/VIDEO Link                                                                        
 Made With ❤️  - Coded By Momos - IndoSec - Hidden Ghost Team

";
echo "Enter URL Post : ";
$input = trim(fgets(STDIN));
$url = file_get_contents("https://www.instadownloader.org/data.php?url=$input");
$url2 = file_get_contents("https://api.instagram.com/oembed/?url=$input");
$data = json_decode($url2,true);
echo "Post By : ";
echo $data['author_name'] ."\n";
echo "Caption : ";
echo $data['title'] ."\n\n";
$filter = array("true","video","|");
$output = str_replace($filter,"",$url);
echo "Link To Download Image/Video : "; echo $output;
?>

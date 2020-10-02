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
echo "Enter URL Post ( Ex: https://www.instagram.com/p/CFwxqaFAAcX ) : ";
$input = trim(fgets(STDIN));

// apdet link bagian di variable $url
$url = file_get_contents($input."/?__a=1");
$url2 = file_get_contents("https://api.instagram.com/oembed/?url=$input");
$data = json_decode($url2,true);

// get link Media
$getLink = json_decode($url);

if(isset($getLink->graphql->shortcode_media->video_url)){
    $fixedLink = $getLink->graphql->shortcode_media->video_url;
}else{
    $fixedLink = $getLink->graphql->shortcode_media->display_url;
}

echo "Post By : ";
echo $data['author_name'] ."\n";
echo "Caption : ";
echo $data['title'] ."\n\n";


// Response
echo "Link To Download Image/Video : "; echo $fixedLink."\n";
?>

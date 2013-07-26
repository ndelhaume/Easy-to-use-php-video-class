php-video-providers-utility
===========================

An easy-to-use PHP class for videos from Youtube / Vimeo / DailyMotion websites

Don't lose time to copy/paste the embed code from YouTube, Vimeo or DailyMotion, just use the class. 
The class can also retrieve the video thumb for you.



## Easy to use ##
This is a basic example of usage 
```PHP 
require('class.video.php');

$params = array('provider' => 'vimeo','videoID' => '38527548');

$video = new Video($params); 
echo $video->embed();
```


## Features ##
- Many options available: Width, Height, Autoplay, etc...
- HQ Thumb (for YouTube only)
- 3 different providers (YouTube, Vimeo, Dailymotion)
- More options to come

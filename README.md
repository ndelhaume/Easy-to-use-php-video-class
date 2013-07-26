[Easy-to-use PHP Video Class]
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


## Quick start

Three quick start options are available:

* [Download the latest release](https://github.com/ndelhaume/Easy-to-use-php-video-class/zipball/master).
* Clone the repo: `git clone git://github.com/ndelhaume/Easy-to-use-php-video-class.git`.


## Copyright and license

Copyright 2013 Nicolas Delhaume, Inc.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this work except in compliance with the License.
You may obtain a copy of the License in the LICENSE file, or at:

  [http://www.apache.org/licenses/LICENSE-2.0](http://www.apache.org/licenses/LICENSE-2.0)

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

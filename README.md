# Threads-Video-Downloader
Download Threads Video, Images, and GIF for free.

[ThreadsTap.com](https://threadstap.com/) is an online tool to download videos from Meta's newly launched social media app, Threads. Here you can download videos on the thread app on your device in a few simple steps. There is no limit on the number of downloads and the tool doesn't charge anything for the same.

[ThreadsTap.com](https://threadstap.com/) is a user-friendly platform to [download video from threads](https://threadstap.com/). It is very secure and efficient as well. Wasting data over app installation is also not a necessity to use this tool, it can be used to [download Threads video](https://threadstap.com/) from any android or iOS device including mobile phones, tablets, laptops and many others as well.

## This is the DEMO code which you can use it to download files!
## It uses ThreadsTap's free API

```
<?php
if (isset($_POST["url"])) {
$shut    = $_POST["url"];
$url = "https://api.threadstap.com/?url=$shut";

        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
        $final = curl_exec($ch); 
    }

?>
```

### Direct API url : https://api.threadstap.com/?url= (YOUR-THREADS-VIDEO-PHOT-URL-HERE)

### API DOCUMENT: https://threadstap.com/api.php

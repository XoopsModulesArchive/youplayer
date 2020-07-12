VIDEO EMBED INFO:
You can embed this with some embed code similar to the one used by YouTube or you can use SWFObject (like you see in the downloaded files)
There are 3 variables that you can send to flash
playlist = place the name of an xml playlist (without .xml at the end)
autoplay = true or false
rollover_changing_thumbs = true or false (in case you want the thumbnails to change on roll over)


XML STRUCTURE:
As you can see, the XML structure is very simple
When ever you want to add a new YouTube video you just need to add a node named "track", a node named "title" and a node named "youtube"
Here you have an example:
<track>
    <title>The YouTube Video Name</title>
    <youtube>YOUTUBE_ID</youtube>
    <details>Description (supports HTML text with CDATA)</details>
</track>


INFO ABOUT THE FLASH FILE:
You can open the FLA file with Flash 8 (8+)
The ActionScript 2.0 code is commented in some parts but it's not that easy to understand if you don't have that much experience.



Enjoy!

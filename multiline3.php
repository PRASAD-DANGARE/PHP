<!--

Function Name    :  PHP Program To Understand The Use Of Multiline Comments
Function Date    :  22 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Normal People Belives That If It Ain't Broke, Don't Fix It.
                 :  Engineers Belives That If It Ain't Broke, It Doesn't Have Enough
                 :  Features Yet. -Scott Adams

-->

<?php

$author = "Scott Adams";

$out = <<<_END
Normal People Belives That If It Ain't Broke, Don't Fix It.
Engineers Belives That If It Ain't Broke, It Doesn't Have Enough
Features Yet.

 - $author.

_END;

<!--

Function Name    :  PHP Program To Understand The Use Of Multiline Comments
Function Date    :  22 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Debugging Is Twice As Hard As Writting The Code In The First Place.
                 :  Therefore , If You Write The Code As Cleaverly As Possible , You Are,
                 :  By Definition , Not Enough To Debug It. -Brian Kernighan

-->

<?php

$author = " Brian Kernighan";

echo <<<_END
Debugging Is Twice As Hard As Writting The Code In The First Place.
Therefore , If You Write The Code As Cleaverly As Possible , You Are,
By Definition , Not Enough To Debug It.

- $author.

_END;

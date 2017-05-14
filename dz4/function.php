<?php

function guestbook($path)
{
    return file($path, FILE_IGNORE_NEW_LINES);
}



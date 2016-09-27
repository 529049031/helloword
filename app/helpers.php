<?php
function delFiles($file)
{
    return @unlink($file);
}
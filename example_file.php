<?php
require 'src/mega.class.php';

// $megafile = new MEGA('https://mega.co.nz/#!yl5EFARS!c6T1en1P8N9GuQzsMy5iCh2U9NEmuqTvSd4KkW42UX4');
$megafile = new MEGA('https://mega.nz/#!ef51ALII!ArlQarBqBCa_TSOFVM86Sw');
// $megafile = new MEGA('https://mega.nz/folder/ef51ALII#ArlQarBqBCa_TSOFVM86Sw/file/qXZhXKwJ');

#$megafile->download_file(); // to download as files
$megafile->download_zip(); // to download as zip. Make sure you have enough space for file in the root path of project
?>
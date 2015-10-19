<?php
require(dirname(__DIR__) . '/vendor/autoload.php');

// CSV에서 url 추출
$urls = file('urls.csv', FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);

// 올바르지 않은 url 검사
$scanner = new \Hanbit\ModernPHP\Url\Scanner($urls);
$invalidUrls = $scanner->getInvalidUrls();

// 올바르지 않은 url 목록 사용
print_r($invalidUrls);

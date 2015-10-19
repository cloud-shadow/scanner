<?php
require(dirname(__DIR__) . '/vendor/autoload.php');

// CSV���� url ����
$urls = file('urls.csv', FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);

// �ùٸ��� ���� url �˻�
$scanner = new \Hanbit\ModernPHP\Url\Scanner($urls);
$invalidUrls = $scanner->getInvalidUrls();

// �ùٸ��� ���� url ��� ���
print_r($invalidUrls);

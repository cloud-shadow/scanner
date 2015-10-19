# URL ��ĳ��

URL ��� �迭�� ��ĵ�ϰ� ������ �� ���� URL�� �����մϴ�.  
(�� ������Ʈ �ҽ��� [modern-php/scanner](https://github.com/modern-php/scanner)�� �ѱ����� �ҽ��Դϴ�.)  

## ��ġ

������ �̿�

``` bash
$ composer require hanbit-modernphp/scanner
```

## ����

``` php
$urls = [
    'http://www.apple.com',
    'http://php.net',
    'http://sdfssdwerw.org'
];
$scanner = new \Hanbit\ModernPHP\Url\Scanner($urls);
print_r($scanner->getInvalidUrls());
```

## �׽�Ʈ

�������� �ʽ��ϴ�.

## �⿩

[CONTRIBUTING](CONTRIBUTING.md) ����

## ������

- [Josh Lockhart](https://github.com/codeguy)
- [All Contributors](https://github.com/modernphp/scanner/contributors)

## ���̼���

The MIT License (MIT). [License File](LICENSE) ����

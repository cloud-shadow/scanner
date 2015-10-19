# URL 스캐너

URL 목록 배열을 스캔하고 접근할 수 없는 URL을 보고합니다.  
(이 컴포넌트 소스는 [modern-php/scanner](https://github.com/modern-php/scanner)의 한국어판 소스입니다.)  

## 설치

컴포저 이용

``` bash
$ composer require hanbit-modernphp/scanner
```

## 사용법

``` php
$urls = [
    'http://www.apple.com',
    'http://php.net',
    'http://sdfssdwerw.org'
];
$scanner = new \Hanbit\ModernPHP\Url\Scanner($urls);
print_r($scanner->getInvalidUrls());
```

## 테스트

지원되지 않습니다.

## 기여

[CONTRIBUTING](CONTRIBUTING.md) 참고

## 제작자

- [Josh Lockhart](https://github.com/codeguy)
- [All Contributors](https://github.com/modernphp/scanner/contributors)

## 라이선스

The MIT License (MIT). [License File](LICENSE) 참고

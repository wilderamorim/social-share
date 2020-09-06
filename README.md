# SocialShare @ElePHPant

[![Maintainer](http://img.shields.io/badge/maintainer-@wilderamorim-blue.svg?style=flat-square)](https://twitter.com/WilderAmorim)
[![Source Code](http://img.shields.io/badge/source-wilderamorim/social-share-blue.svg?style=flat-square)](https://github.com/wilderamorim/social-share)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/elephpant/social-share.svg?style=flat-square)](https://packagist.org/packages/elephpant/social-share)
[![Latest Version](https://img.shields.io/github/release/wilderamorim/social-share.svg?style=flat-square)](https://github.com/wilderamorim/social-share/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/wilderamorim/social-share.svg?style=flat-square)](https://scrutinizer-ci.com/g/wilderamorim/social-share)
[![Quality Score](https://img.shields.io/scrutinizer/g/wilderamorim/social-share.svg?style=flat-square)](https://scrutinizer-ci.com/g/wilderamorim/social-share)
[![Total Downloads](https://img.shields.io/packagist/dt/elephpant/social-share.svg?style=flat-square)](https://packagist.org/packages/elephpant/social-share)

###### A simple way to generate social share links.

Um jeito simples de gerar links de compartilhamento social.

### Highlights

- Simple installation (Instalação simples)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

### Available services

* Facebook
* Twitter
* LinkedIn
* Pinterest
* WhatsApp
* Telegram
* Reddit
* Email

## Installation

SocialShare is available via Composer:

```bash
"elephpant/social-share": "1.0.*"
```

or run

```bash
composer require elephpant/social-share
```

## Documentation

###### For details on how to use, see a sample folder in the component directory. In it you will have an example of using the class. It works like this:

Para mais detalhes sobre como usar, veja uma pasta de exemplo no diretório do componente. Nela terá um exemplo de uso da classe. Ele funciona assim:

##### Basic Usage:

```php
<?php
require __DIR__ . '/../vendor/autoload.php';

use ElePHPant\SocialShare\SocialShare;

// [required] $url, [required] $text
$share = new SocialShare('https://github.com', 'Build software better, together');
?>

<ul>
    <li><a href="<?= $share->facebook(); ?>" target="_blank">Facebook</a></li>
    <li><a href="<?= $share->twitter(/* $username */); ?>" target="_blank">Twitter</a></li>
    <li><a href="<?= $share->linkedin(/* $summary, $source */); ?>" target="_blank">LinkedIn</a></li>
    <li><a href="<?= $share->pinterest(/* $image */); ?>" target="_blank">Pinterest</a></li>
    <li><a href="<?= $share->whatsapp(); ?>" target="_blank">WhatsApp</a></li>
    <li><a href="<?= $share->telegram(); ?>" target="_blank">Telegram</a></li>
    <li><a href="<?= $share->reddit(); ?>" target="_blank">Reddit</a></li>
    <li><a href="<?= $share->email(/* $recipientEmail */); ?>" target="_blank">Email</a></li>
</ul>
```

## Contributing

Please see [CONTRIBUTING](https://github.com/wilderamorim/social-share/blob/master/CONTRIBUTING.md) for details.

## Credits

- [Wilder Amorim](https://github.com/wilderamorim) (Developer)
- [Agência Uebi](https://www.uebi.com.br) (Team)
- [All Contributors](https://github.com/wilderamorim/social-share/contributors) (This Rock)

## License

The MIT License (MIT). Please see [License File](https://github.com/wilderamorim/social-share/blob/master/LICENSE) for more information.
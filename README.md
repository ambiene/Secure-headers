# Ambiene SecureHeaders Package

The SecureHeaders package is a Laravel service provider designed to enhance the security of your web application by adding or modifying HTTP headers.

## Features

- **Easy Configuration:** Comes with a simple configuration file to customize the security headers according to your needs.
- **Remove Headers:** Allows removing or altering headers like `X-Powered-By` and `Server` to obscure details about the backend server.
- **X-Frame-Options:** Configures the `X-Frame-Options` header to prevent clickjacking attacks.

## Installation

Add the following to your kernel.php file:

```php
protected $middleware = [
    // ...
    \Ambiene\SecureHeaders\SecureHeaders::class,
];
```

```bash
php artisan vendor:publish --provider="Ambiene\SecureHeaders\ServiceProvider" --tag="config"
```

This will publish a secure-headers.php configuration file to your config directory.

## Configuration

After publishing, you can edit the config/secure-headers.php file to set your desired headers. The default configuration is as follows:

```php
return [
    "server" => "",
    "x-powered-by" => "",
    "x-frame-options" => "SAMEORIGIN",
];
```

## Usage

Once installed and configured, the SecureHeaders middleware will automatically apply the security headers to all responses of your Laravel application. There's no need for additional code to activate the headers once the package is set up.

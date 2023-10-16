<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit720514ffd857eab5e0458f08729ecae4
{
    public static $files = array (
        '941748b3c8cae4466c827dfb5ca9602a' => __DIR__ . '/..' . '/rmccue/requests/library/Deprecated.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WpOrg\\Requests\\' => 15,
        ),
        'S' => 
        array (
            'Svg\\' => 4,
            'Sabberworm\\CSS\\' => 15,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'Masterminds\\' => 12,
        ),
        'F' => 
        array (
            'FontLib\\' => 8,
        ),
        'D' => 
        array (
            'Dompdf\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WpOrg\\Requests\\' => 
        array (
            0 => __DIR__ . '/..' . '/rmccue/requests/src',
        ),
        'Svg\\' => 
        array (
            0 => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg',
        ),
        'Sabberworm\\CSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Masterminds\\' => 
        array (
            0 => __DIR__ . '/..' . '/masterminds/html5/src',
        ),
        'FontLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib',
        ),
        'Dompdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/dompdf/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Culqi\\Cards' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Cards.php',
        'Culqi\\Charges' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Charges.php',
        'Culqi\\Client' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Client.php',
        'Culqi\\Culqi' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Culqi.php',
        'Culqi\\Customers' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Customers.php',
        'Culqi\\Error\\AuthenticationError' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Error/Errors.php',
        'Culqi\\Error\\CulqiException' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Error/Errors.php',
        'Culqi\\Error\\InputValidationError' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Error/Errors.php',
        'Culqi\\Error\\InvalidApiKey' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Error/Errors.php',
        'Culqi\\Error\\MethodNotAllowed' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Error/Errors.php',
        'Culqi\\Error\\NotFound' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Error/Errors.php',
        'Culqi\\Error\\UnableToConnect' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Error/Errors.php',
        'Culqi\\Error\\UnhandledError' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Error/Errors.php',
        'Culqi\\Events' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Events.php',
        'Culqi\\Iins' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Iins.php',
        'Culqi\\Orders' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Orders.php',
        'Culqi\\Plans' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Plans.php',
        'Culqi\\Refunds' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Refunds.php',
        'Culqi\\Resource' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Resource.php',
        'Culqi\\Subscriptions' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Subscriptions.php',
        'Culqi\\Tokens' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Tokens.php',
        'Culqi\\Transfers' => __DIR__ . '/..' . '/culqi/culqi-php/lib/Culqi/Transfers.php',
        'Dompdf\\Cpdf' => __DIR__ . '/..' . '/dompdf/dompdf/lib/Cpdf.php',
        'Requests' => __DIR__ . '/..' . '/rmccue/requests/library/Requests.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit720514ffd857eab5e0458f08729ecae4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit720514ffd857eab5e0458f08729ecae4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit720514ffd857eab5e0458f08729ecae4::$classMap;

        }, null, ClassLoader::class);
    }
}
<?php return array (
  'app' => 
  array (
    'name' => '© Acelle Mail',
    'env' => 'production',
    'debug' => true,
    'url' => 'https://email.softwarestore.biz',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'base64:J1R27O4iT5ZE5NCBmT/hLDrBKEFQMXOcyrNwYzke2/A=',
    'cipher' => 'AES-256-CBC',
    'demo' => false,
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Laravel\\Tinker\\TinkerServiceProvider',
      23 => 'Acelle\\Providers\\AppServiceProvider',
      24 => 'Acelle\\Providers\\AuthServiceProvider',
      25 => 'Acelle\\Providers\\EventServiceProvider',
      26 => 'Acelle\\Providers\\RouteServiceProvider',
      27 => 'Acelle\\Providers\\JobServiceProvider',
      28 => 'Acelle\\Extra\\LogViewer\\ServiceProvider',
      29 => 'Lawepham\\Geoip\\LaweGeoIpProvider',
      30 => 'Intervention\\Image\\ImageServiceProvider',
      31 => 'Chumper\\Zipper\\ZipperServiceProvider',
      32 => 'Acelle\\Cashier\\CashierServiceProvider',
      33 => 'Acelle\\Providers\\MailerServiceProvider',
      34 => 'Acelle\\Providers\\StorageServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Image' => 'Intervention\\Image\\Facades\\Image',
      'Tool' => 'Acelle\\Library\\Tool',
      'Yaml' => 'Symfony\\Component\\Yaml\\Yaml',
      'Zipper' => 'Chumper\\Zipper\\Zipper',
      'Geoip' => 'Lawepham\\Geoip\\Facades\\LaweGeoipFacade',
      'Twig' => 'TwigBridge\\Facade\\Twig',
    ),
    'redis_enabled' => false,
    'import_batch_size' => 9993,
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'Acelle\\Model\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'pusher',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/home/softwarestore22/public_html/email/storage/framework/cache',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
    'prefix' => 'laravel',
  ),
  'compile' => 
  array (
    'files' => 
    array (
    ),
    'providers' => 
    array (
    ),
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'software_emailmarketingdb22',
        'prefix' => 'em',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'software_emailmarketingdb22',
        'username' => 'software_emailmarketinguser22',
        'password' => '~jwalKs(Y#LJ',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => 'em',
        'strict' => false,
        'engine' => 'InnoDB',
        'options' => 
        array (
          20 => true,
        ),
        'timezone' => '+00:00',
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'software_emailmarketingdb22',
        'username' => 'software_emailmarketinguser22',
        'password' => '~jwalKs(Y#LJ',
        'charset' => 'utf8',
        'prefix' => 'em',
        'schema' => 'public',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'options' => 
      array (
        'cluster' => 'redis',
      ),
      'clusters' => 
      array (
        'default' => 
        array (
          0 => 
          array (
            'host' => 'localhost',
            'password' => NULL,
            'port' => '6379',
            'database' => 0,
          ),
        ),
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/home/softwarestore22/public_html/email/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/home/softwarestore22/public_html/email/storage/app/public',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => 'your-key',
        'secret' => 'your-secret',
        'region' => 'your-region',
        'bucket' => 'your-bucket',
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'logging' => 
  array (
    'default' => 'daily',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/home/softwarestore22/public_html/email/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/home/softwarestore22/public_html/email/storage/logs/fpm-fcgi/laravel.log',
        'level' => 'debug',
        'days' => 3,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'sendmail',
    'host' => '',
    'port' => '',
    'from' => 
    array (
      'address' => 'softwarestore.biz@gmail.com',
      'name' => 'Mrinal Kumar',
    ),
    'encryption' => '',
    'username' => '',
    'password' => '',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/home/softwarestore22/public_html/email/resources/views/vendor/mail',
      ),
    ),
    'stream' => 
    array (
      'ssl' => 
      array (
        'allow_self_signed' => true,
        'verify_peer' => false,
        'verify_peer_name' => false,
      ),
    ),
  ),
  'purifier' => 
  array (
    'encoding' => 'UTF-8',
    'finalize' => true,
    'cachePath' => '/home/softwarestore22/public_html/email/storage/app/purifier',
    'cacheFileMode' => 493,
    'settings' => 
    array (
      'default' => 
      array (
        'HTML.Doctype' => 'HTML 4.01 Transitional',
        'HTML.Allowed' => 'div,b,strong,i,em,u,a[href|title],ul,ol,li,p[style],br,span[style],img[width|height|alt|src]',
        'CSS.AllowedProperties' => 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align',
        'AutoFormat.AutoParagraph' => true,
        'AutoFormat.RemoveEmpty' => true,
      ),
      'test' => 
      array (
        'Attr.EnableID' => 'true',
      ),
      'youtube' => 
      array (
        'HTML.SafeIframe' => 'true',
        'URI.SafeIframeRegexp' => '%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/)%',
      ),
      'custom_definition' => 
      array (
        'id' => 'html5-definitions',
        'rev' => 1,
        'debug' => false,
        'elements' => 
        array (
          0 => 
          array (
            0 => 'section',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          1 => 
          array (
            0 => 'nav',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          2 => 
          array (
            0 => 'article',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          3 => 
          array (
            0 => 'aside',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          4 => 
          array (
            0 => 'header',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          5 => 
          array (
            0 => 'footer',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          6 => 
          array (
            0 => 'address',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          7 => 
          array (
            0 => 'hgroup',
            1 => 'Block',
            2 => 'Required: h1 | h2 | h3 | h4 | h5 | h6',
            3 => 'Common',
          ),
          8 => 
          array (
            0 => 'figure',
            1 => 'Block',
            2 => 'Optional: (figcaption, Flow) | (Flow, figcaption) | Flow',
            3 => 'Common',
          ),
          9 => 
          array (
            0 => 'figcaption',
            1 => 'Inline',
            2 => 'Flow',
            3 => 'Common',
          ),
          10 => 
          array (
            0 => 'video',
            1 => 'Block',
            2 => 'Optional: (source, Flow) | (Flow, source) | Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
              'width' => 'Length',
              'height' => 'Length',
              'poster' => 'URI',
              'preload' => 'Enum#auto,metadata,none',
              'controls' => 'Bool',
            ),
          ),
          11 => 
          array (
            0 => 'source',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
            ),
          ),
          12 => 
          array (
            0 => 's',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          13 => 
          array (
            0 => 'var',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          14 => 
          array (
            0 => 'sub',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          15 => 
          array (
            0 => 'sup',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          16 => 
          array (
            0 => 'mark',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          17 => 
          array (
            0 => 'wbr',
            1 => 'Inline',
            2 => 'Empty',
            3 => 'Core',
          ),
          18 => 
          array (
            0 => 'ins',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
          19 => 
          array (
            0 => 'del',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            0 => 'iframe',
            1 => 'allowfullscreen',
            2 => 'Bool',
          ),
          1 => 
          array (
            0 => 'table',
            1 => 'height',
            2 => 'Text',
          ),
          2 => 
          array (
            0 => 'td',
            1 => 'border',
            2 => 'Text',
          ),
          3 => 
          array (
            0 => 'th',
            1 => 'border',
            2 => 'Text',
          ),
          4 => 
          array (
            0 => 'tr',
            1 => 'width',
            2 => 'Text',
          ),
          5 => 
          array (
            0 => 'tr',
            1 => 'height',
            2 => 'Text',
          ),
          6 => 
          array (
            0 => 'tr',
            1 => 'border',
            2 => 'Text',
          ),
        ),
      ),
      'custom_attributes' => 
      array (
        0 => 
        array (
          0 => 'a',
          1 => 'target',
          2 => 'Enum#_blank,_self,_target,_top',
        ),
      ),
      'custom_elements' => 
      array (
        0 => 
        array (
          0 => 'u',
          1 => 'Inline',
          2 => 'Inline',
          3 => 'Common',
        ),
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'database',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 604800,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 60,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 60,
      ),
      'async' => 
      array (
        'driver' => 'async',
        'table' => 'jobs',
        'queue' => 'default',
        'expire' => 60,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'Acelle\\User',
      'key' => NULL,
      'secret' => NULL,
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/home/softwarestore22/public_html/email/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
  ),
  'twigbridge' => 
  array (
    'twig' => 
    array (
      'extension' => 'twig',
      'environment' => 
      array (
        'debug' => true,
        'charset' => 'utf-8',
        'base_template_class' => 'TwigBridge\\Twig\\Template',
        'cache' => NULL,
        'auto_reload' => true,
        'strict_variables' => false,
        'autoescape' => 'html',
        'optimizations' => -1,
      ),
      'globals' => 
      array (
      ),
    ),
    'extensions' => 
    array (
      'enabled' => 
      array (
        0 => 'TwigBridge\\Extension\\Loader\\Facades',
        1 => 'TwigBridge\\Extension\\Loader\\Filters',
        2 => 'TwigBridge\\Extension\\Loader\\Functions',
        3 => 'TwigBridge\\Extension\\Laravel\\Auth',
        4 => 'TwigBridge\\Extension\\Laravel\\Config',
        5 => 'TwigBridge\\Extension\\Laravel\\Dump',
        6 => 'TwigBridge\\Extension\\Laravel\\Input',
        7 => 'TwigBridge\\Extension\\Laravel\\Session',
        8 => 'TwigBridge\\Extension\\Laravel\\Str',
        9 => 'TwigBridge\\Extension\\Laravel\\Translator',
        10 => 'TwigBridge\\Extension\\Laravel\\Url',
        11 => 'Acelle\\Library\\TwigUx',
      ),
      'facades' => 
      array (
      ),
      'functions' => 
      array (
        0 => 'elixir',
        1 => 'head',
        2 => 'last',
        3 => 'mix',
      ),
      'filters' => 
      array (
        'get' => 'data_get',
      ),
    ),
  ),
  'verification' => 
  array (
    'services' => 
    array (
      0 => 
      array (
        'id' => 'kickbox.io',
        'name' => 'Kickbox',
        'uri' => 'https://api.kickbox.io/v2/verify?email={EMAIL}&apikey={API_KEY}',
        'request_type' => 'GET',
        'fields' => 
        array (
          0 => 'api_key',
        ),
        'result_xpath' => '$.result',
        'result_map' => 
        array (
          'deliverable' => 'deliverable',
          'undeliverable' => 'undeliverable',
          'risky' => 'risky',
          'unknown' => 'unknown',
        ),
      ),
      1 => 
      array (
        'id' => 'thechecker.co',
        'name' => 'TheChecker',
        'uri' => 'https://api.thechecker.co/v1/verify?email={EMAIL}&api_key={API_KEY}',
        'request_type' => 'GET',
        'fields' => 
        array (
          0 => 'api_key',
        ),
        'result_xpath' => '$.result',
        'result_map' => 
        array (
          'deliverable' => 'deliverable',
          'undeliverable' => 'undeliverable',
          'risky' => 'risky',
          'unknown' => 'unknown',
        ),
      ),
      2 => 
      array (
        'id' => 'verify-email.org',
        'name' => 'verify-email.org (deprecated)',
        'uri' => 'http://api.verify-email.org/api.php?usr={USERNAME}&pwd={PASSWORD}&check={EMAIL}',
        'request_type' => 'GET',
        'fields' => 
        array (
          0 => 'username',
          1 => 'password',
        ),
        'result_xpath' => '$.authentication_status',
        'result_map' => 
        array (
          1 => 'deliverable',
          0 => 'undeliverable',
        ),
      ),
      3 => 
      array (
        'id' => 'verify-email.org',
        'name' => 'verify-email.org',
        'uri' => 'https://app.verify-email.org/api/v1/{API_KEY}/verify/{EMAIL}',
        'request_type' => 'GET',
        'fields' => 
        array (
          0 => 'api_key',
        ),
        'result_xpath' => '$.status',
        'result_map' => 
        array (
          1 => 'deliverable',
          0 => 'undeliverable',
          -1 => 'unknown',
        ),
      ),
      4 => 
      array (
        'id' => 'everifier.org',
        'name' => 'everifier.org',
        'uri' => 'https://api.everifier.org/v1/{API_KEY}/verify/{EMAIL}',
        'request_type' => 'GET',
        'fields' => 
        array (
          0 => 'api_key',
        ),
        'result_xpath' => '$.*.status',
        'result_map' => 
        array (
          1 => 'deliverable',
          0 => 'undeliverable',
          -1 => 'risky',
        ),
      ),
      5 => 
      array (
        'id' => 'verifyre.co',
        'name' => 'verifyre.co',
        'uri' => 'https://www.verifyre.co/app/check?id={USERNAME}&key={API_KEY}&mail={EMAIL}',
        'request_type' => 'GET',
        'fields' => 
        array (
          0 => 'username',
          1 => 'api_key',
        ),
        'result_xpath' => '$.mail.status',
        'result_map' => 
        array (
          1 => 'deliverable',
          2 => 'risky',
          3 => 'undeliverable',
        ),
      ),
      6 => 
      array (
        'id' => 'localmail.io',
        'name' => 'localmail.io',
        'uri' => 'https://api.localmail.io/v1/mail/verify?key={API_KEY}&email={EMAIL}',
        'request_type' => 'GET',
        'fields' => 
        array (
          0 => 'api_key',
        ),
        'result_xpath' => '$.result',
        'result_map' => 
        array (
          'deliverable' => 'deliverable',
          'unknown' => 'unknown',
          'risky' => 'risky',
          'undeliverable' => 'undeliverable',
        ),
      ),
      7 => 
      array (
        'id' => 'debounce.io',
        'name' => 'debounce.io',
        'uri' => 'https://api.debounce.io/v1/?api={API_KEY}&email={EMAIL}',
        'request_type' => 'GET',
        'fields' => 
        array (
          0 => 'api_key',
        ),
        'result_xpath' => '$.debounce.result',
        'result_map' => 
        array (
          'Safe to Send' => 'deliverable',
          'Unknown' => 'unknown',
          'Risky' => 'risky',
          'Invalid' => 'undeliverable',
        ),
      ),
      8 => 
      array (
        'id' => 'emailchecker.com',
        'name' => 'emailchecker.com',
        'uri' => 'https://api.emailverifyapi.com/v3/lookups/json?email={EMAIL}&key={API_KEY}',
        'request_type' => 'GET',
        'fields' => 
        array (
          0 => 'api_key',
        ),
        'result_xpath' => '$.deliverable',
        'result_map' => 
        array (
          'true' => 'deliverable',
          'false' => 'undeliverable',
        ),
      ),
      9 => 
      array (
        'id' => 'cloudvision.io',
        'name' => 'Cloud Vision',
        'uri' => 'https://dev-marketing.cloudvision.io/api/v1/verify?email={EMAIL}&api_token={API_KEY}',
        'request_type' => 'GET',
        'fields' => 
        array (
          0 => 'api_key',
        ),
        'result_xpath' => '$.result',
        'result_map' => 
        array (
          'deliverable' => 'deliverable',
          'undeliverable' => 'undeliverable',
        ),
      ),
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/home/softwarestore22/public_html/email/resources/views',
    ),
    'compiled' => '/home/softwarestore22/public_html/email/storage/framework/views',
  ),
  'cashier' => 
  array (
    'gateway' => 'direct',
    'end_period_last_days' => 10,
    'renew_free_plan' => 'yes',
    'recurring_charge_before_days' => 3,
    'gateways' => 
    array (
      'direct' => 
      array (
        'name' => 'direct',
        'fields' => 
        array (
          'payment_instruction' => '',
          'confirmation_message' => '',
        ),
      ),
      'stripe' => 
      array (
        'name' => 'stripe',
        'fields' => 
        array (
          'publishable_key' => NULL,
          'secret_key' => NULL,
          'always_ask_for_valid_card' => 'no',
          'billing_address_required' => 'no',
        ),
      ),
      'braintree' => 
      array (
        'name' => 'braintree',
        'fields' => 
        array (
          'environment' => 'sandbox',
          'merchant_id' => NULL,
          'public_key' => NULL,
          'private_key' => NULL,
          'always_ask_for_valid_card' => 'no',
        ),
      ),
      'coinpayments' => 
      array (
        'name' => 'coinpayments',
        'fields' => 
        array (
          'merchant_id' => NULL,
          'public_key' => NULL,
          'private_key' => NULL,
          'ipn_secret' => NULL,
          'receive_currency' => 'BTC',
        ),
      ),
      'paypal' => 
      array (
        'name' => 'paypal',
        'fields' => 
        array (
          'environment' => 'sandbox',
          'client_id' => NULL,
          'secret' => NULL,
        ),
      ),
      'paypal_subscription' => 
      array (
        'name' => 'paypal_subscription',
        'fields' => 
        array (
          'environment' => 'sandbox',
          'client_id' => NULL,
          'secret' => NULL,
        ),
      ),
      'razorpay' => 
      array (
        'name' => 'razorpay',
        'fields' => 
        array (
          'key_id' => NULL,
          'key_secret' => NULL,
        ),
      ),
      'paystack' => 
      array (
        'name' => 'paystack',
        'fields' => 
        array (
          'public_key' => NULL,
          'secret_key' => NULL,
        ),
      ),
    ),
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);

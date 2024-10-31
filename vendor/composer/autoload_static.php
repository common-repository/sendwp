<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaa30835418614a1d6b4cbaed07d882ef
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TrustedLogin\\' => 13,
        ),
        'S' => 
        array (
            'ScssPhp\\ScssPhp\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TrustedLogin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/trustedlogin/client/src',
        ),
        'ScssPhp\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/scssphp/scssphp/src',
        ),
    );

    public static $classMap = array (
        'ComposerAutoloaderInitc5c27141db49df4e47392432bf5f49b9' => __DIR__ . '/..' . '/trustedlogin/client/vendor/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/trustedlogin/client/vendor/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitc5c27141db49df4e47392432bf5f49b9' => __DIR__ . '/..' . '/trustedlogin/client/vendor/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ScssPhp\\ScssPhp\\Base\\Range' => __DIR__ . '/..' . '/scssphp/scssphp/src/Base/Range.php',
        'ScssPhp\\ScssPhp\\Block' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block.php',
        'ScssPhp\\ScssPhp\\Block\\AtRootBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/AtRootBlock.php',
        'ScssPhp\\ScssPhp\\Block\\CallableBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/CallableBlock.php',
        'ScssPhp\\ScssPhp\\Block\\ContentBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/ContentBlock.php',
        'ScssPhp\\ScssPhp\\Block\\DirectiveBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/DirectiveBlock.php',
        'ScssPhp\\ScssPhp\\Block\\EachBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/EachBlock.php',
        'ScssPhp\\ScssPhp\\Block\\ElseBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/ElseBlock.php',
        'ScssPhp\\ScssPhp\\Block\\ElseifBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/ElseifBlock.php',
        'ScssPhp\\ScssPhp\\Block\\ForBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/ForBlock.php',
        'ScssPhp\\ScssPhp\\Block\\IfBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/IfBlock.php',
        'ScssPhp\\ScssPhp\\Block\\MediaBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/MediaBlock.php',
        'ScssPhp\\ScssPhp\\Block\\NestedPropertyBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/NestedPropertyBlock.php',
        'ScssPhp\\ScssPhp\\Block\\WhileBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block/WhileBlock.php',
        'ScssPhp\\ScssPhp\\Cache' => __DIR__ . '/..' . '/scssphp/scssphp/src/Cache.php',
        'ScssPhp\\ScssPhp\\Colors' => __DIR__ . '/..' . '/scssphp/scssphp/src/Colors.php',
        'ScssPhp\\ScssPhp\\CompilationResult' => __DIR__ . '/..' . '/scssphp/scssphp/src/CompilationResult.php',
        'ScssPhp\\ScssPhp\\Compiler' => __DIR__ . '/..' . '/scssphp/scssphp/src/Compiler.php',
        'ScssPhp\\ScssPhp\\Compiler\\CachedResult' => __DIR__ . '/..' . '/scssphp/scssphp/src/Compiler/CachedResult.php',
        'ScssPhp\\ScssPhp\\Compiler\\Environment' => __DIR__ . '/..' . '/scssphp/scssphp/src/Compiler/Environment.php',
        'ScssPhp\\ScssPhp\\Exception\\CompilerException' => __DIR__ . '/..' . '/scssphp/scssphp/src/Exception/CompilerException.php',
        'ScssPhp\\ScssPhp\\Exception\\ParserException' => __DIR__ . '/..' . '/scssphp/scssphp/src/Exception/ParserException.php',
        'ScssPhp\\ScssPhp\\Exception\\RangeException' => __DIR__ . '/..' . '/scssphp/scssphp/src/Exception/RangeException.php',
        'ScssPhp\\ScssPhp\\Exception\\SassException' => __DIR__ . '/..' . '/scssphp/scssphp/src/Exception/SassException.php',
        'ScssPhp\\ScssPhp\\Exception\\SassScriptException' => __DIR__ . '/..' . '/scssphp/scssphp/src/Exception/SassScriptException.php',
        'ScssPhp\\ScssPhp\\Exception\\ServerException' => __DIR__ . '/..' . '/scssphp/scssphp/src/Exception/ServerException.php',
        'ScssPhp\\ScssPhp\\Formatter' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter.php',
        'ScssPhp\\ScssPhp\\Formatter\\Compact' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Compact.php',
        'ScssPhp\\ScssPhp\\Formatter\\Compressed' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Compressed.php',
        'ScssPhp\\ScssPhp\\Formatter\\Crunched' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Crunched.php',
        'ScssPhp\\ScssPhp\\Formatter\\Debug' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Debug.php',
        'ScssPhp\\ScssPhp\\Formatter\\Expanded' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Expanded.php',
        'ScssPhp\\ScssPhp\\Formatter\\Nested' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Nested.php',
        'ScssPhp\\ScssPhp\\Formatter\\OutputBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/OutputBlock.php',
        'ScssPhp\\ScssPhp\\Logger\\LoggerInterface' => __DIR__ . '/..' . '/scssphp/scssphp/src/Logger/LoggerInterface.php',
        'ScssPhp\\ScssPhp\\Logger\\QuietLogger' => __DIR__ . '/..' . '/scssphp/scssphp/src/Logger/QuietLogger.php',
        'ScssPhp\\ScssPhp\\Logger\\StreamLogger' => __DIR__ . '/..' . '/scssphp/scssphp/src/Logger/StreamLogger.php',
        'ScssPhp\\ScssPhp\\Node' => __DIR__ . '/..' . '/scssphp/scssphp/src/Node.php',
        'ScssPhp\\ScssPhp\\Node\\Number' => __DIR__ . '/..' . '/scssphp/scssphp/src/Node/Number.php',
        'ScssPhp\\ScssPhp\\OutputStyle' => __DIR__ . '/..' . '/scssphp/scssphp/src/OutputStyle.php',
        'ScssPhp\\ScssPhp\\Parser' => __DIR__ . '/..' . '/scssphp/scssphp/src/Parser.php',
        'ScssPhp\\ScssPhp\\SourceMap\\Base64' => __DIR__ . '/..' . '/scssphp/scssphp/src/SourceMap/Base64.php',
        'ScssPhp\\ScssPhp\\SourceMap\\Base64VLQ' => __DIR__ . '/..' . '/scssphp/scssphp/src/SourceMap/Base64VLQ.php',
        'ScssPhp\\ScssPhp\\SourceMap\\SourceMapGenerator' => __DIR__ . '/..' . '/scssphp/scssphp/src/SourceMap/SourceMapGenerator.php',
        'ScssPhp\\ScssPhp\\Type' => __DIR__ . '/..' . '/scssphp/scssphp/src/Type.php',
        'ScssPhp\\ScssPhp\\Util' => __DIR__ . '/..' . '/scssphp/scssphp/src/Util.php',
        'ScssPhp\\ScssPhp\\Util\\Path' => __DIR__ . '/..' . '/scssphp/scssphp/src/Util/Path.php',
        'ScssPhp\\ScssPhp\\ValueConverter' => __DIR__ . '/..' . '/scssphp/scssphp/src/ValueConverter.php',
        'ScssPhp\\ScssPhp\\Version' => __DIR__ . '/..' . '/scssphp/scssphp/src/Version.php',
        'ScssPhp\\ScssPhp\\Warn' => __DIR__ . '/..' . '/scssphp/scssphp/src/Warn.php',
        'TrustedLoginAJAXTest' => __DIR__ . '/..' . '/trustedlogin/client/tests/test-ajax.php',
        'TrustedLoginConfigTest' => __DIR__ . '/..' . '/trustedlogin/client/tests/test-config.php',
        'TrustedLoginUsersTest' => __DIR__ . '/..' . '/trustedlogin/client/tests/test-users.php',
        'TrustedLogin\\Admin' => __DIR__ . '/..' . '/trustedlogin/client/src/Admin.php',
        'TrustedLogin\\Ajax' => __DIR__ . '/..' . '/trustedlogin/client/src/Ajax.php',
        'TrustedLogin\\Client' => __DIR__ . '/..' . '/trustedlogin/client/src/Client.php',
        'TrustedLogin\\Config' => __DIR__ . '/..' . '/trustedlogin/client/src/Config.php',
        'TrustedLogin\\Cron' => __DIR__ . '/..' . '/trustedlogin/client/src/Cron.php',
        'TrustedLogin\\Encryption' => __DIR__ . '/..' . '/trustedlogin/client/src/Encryption.php',
        'TrustedLogin\\Endpoint' => __DIR__ . '/..' . '/trustedlogin/client/src/Endpoint.php',
        'TrustedLogin\\Envelope' => __DIR__ . '/..' . '/trustedlogin/client/src/Envelope.php',
        'TrustedLogin\\Form' => __DIR__ . '/..' . '/trustedlogin/client/src/Form.php',
        'TrustedLogin\\Logger' => __DIR__ . '/..' . '/trustedlogin/client/src/Logger.php',
        'TrustedLogin\\Logging' => __DIR__ . '/..' . '/trustedlogin/client/src/Logging.php',
        'TrustedLogin\\Remote' => __DIR__ . '/..' . '/trustedlogin/client/src/Remote.php',
        'TrustedLogin\\SecurityChecks' => __DIR__ . '/..' . '/trustedlogin/client/src/SecurityChecks.php',
        'TrustedLogin\\SiteAccess' => __DIR__ . '/..' . '/trustedlogin/client/src/SiteAccess.php',
        'TrustedLogin\\SupportRole' => __DIR__ . '/..' . '/trustedlogin/client/src/SupportRole.php',
        'TrustedLogin\\SupportUser' => __DIR__ . '/..' . '/trustedlogin/client/src/SupportUser.php',
        'TrustedLogin\\TrustedLoginClientTest' => __DIR__ . '/..' . '/trustedlogin/client/tests/test-client.php',
        'TrustedLogin\\TrustedLoginEncryptionTest' => __DIR__ . '/..' . '/trustedlogin/client/tests/test-encryption.php',
        'TrustedLogin\\TrustedLoginLoggingTest' => __DIR__ . '/..' . '/trustedlogin/client/tests/test-logging.php',
        'TrustedLogin\\TrustedLoginRemoteTest' => __DIR__ . '/..' . '/trustedlogin/client/tests/test-remote.php',
        'TrustedLogin\\TrustedLoginSiteAccessTest' => __DIR__ . '/..' . '/trustedlogin/client/tests/test-siteaccess.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaa30835418614a1d6b4cbaed07d882ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaa30835418614a1d6b4cbaed07d882ef::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaa30835418614a1d6b4cbaed07d882ef::$classMap;

        }, null, ClassLoader::class);
    }
}

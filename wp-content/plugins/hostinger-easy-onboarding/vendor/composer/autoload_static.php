<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit355c18229fe47c20ad676cad3dd03349
{
    public static $files = array (
        'd05ecc14ff93fd612a81ec7e8ab4c2c9' => __DIR__ . '/..' . '/yahnis-elsts/plugin-update-checker/load-v5p4.php',
    );

    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hostinger\\WpMenuManager\\' => 24,
            'Hostinger\\WpHelper\\' => 19,
            'Hostinger\\Tests\\' => 16,
            'Hostinger\\Surveys\\' => 18,
            'Hostinger\\EasyOnboarding\\' => 25,
            'Hostinger\\Amplitude\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hostinger\\WpMenuManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/hostinger/hostinger-wp-menu-manager/src',
        ),
        'Hostinger\\WpHelper\\' => 
        array (
            0 => __DIR__ . '/..' . '/hostinger/hostinger-wp-helper/src',
        ),
        'Hostinger\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/hostinger/hostinger-wp-helper/tests/phpunit',
        ),
        'Hostinger\\Surveys\\' => 
        array (
            0 => __DIR__ . '/..' . '/hostinger/hostinger-wp-surveys/src',
        ),
        'Hostinger\\EasyOnboarding\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Hostinger\\Amplitude\\' => 
        array (
            0 => __DIR__ . '/..' . '/hostinger/hostinger-wp-amplitude/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Hostinger\\Amplitude\\ActionDispatcher' => __DIR__ . '/..' . '/hostinger/hostinger-wp-amplitude/src/ActionDispatcher.php',
        'Hostinger\\Amplitude\\AmplitudeLoader' => __DIR__ . '/..' . '/hostinger/hostinger-wp-amplitude/src/AmplitudeLoader.php',
        'Hostinger\\Amplitude\\AmplitudeManager' => __DIR__ . '/..' . '/hostinger/hostinger-wp-amplitude/src/AmplitudeManager.php',
        'Hostinger\\Amplitude\\Rest' => __DIR__ . '/..' . '/hostinger/hostinger-wp-amplitude/src/Rest.php',
        'Hostinger\\EasyOnboarding\\Activator' => __DIR__ . '/../..' . '/includes/Activator.php',
        'Hostinger\\EasyOnboarding\\Admin\\Actions' => __DIR__ . '/../..' . '/includes/Admin/Actions.php',
        'Hostinger\\EasyOnboarding\\Admin\\Ajax' => __DIR__ . '/../..' . '/includes/Admin/Ajax.php',
        'Hostinger\\EasyOnboarding\\Admin\\Assets' => __DIR__ . '/../..' . '/includes/Admin/Assets.php',
        'Hostinger\\EasyOnboarding\\Admin\\Hooks' => __DIR__ . '/../..' . '/includes/Admin/Hooks.php',
        'Hostinger\\EasyOnboarding\\Admin\\Menu' => __DIR__ . '/../..' . '/includes/Admin/Menu.php',
        'Hostinger\\EasyOnboarding\\Admin\\Onboarding\\AutocompleteSteps' => __DIR__ . '/../..' . '/includes/Admin/Onboarding/AutocompleteSteps.php',
        'Hostinger\\EasyOnboarding\\Admin\\Onboarding\\Onboarding' => __DIR__ . '/../..' . '/includes/Admin/Onboarding/Onboarding.php',
        'Hostinger\\EasyOnboarding\\Admin\\Onboarding\\Plugin' => __DIR__ . '/../..' . '/includes/Admin/Onboarding/Plugin.php',
        'Hostinger\\EasyOnboarding\\Admin\\Onboarding\\PluginManager' => __DIR__ . '/../..' . '/includes/Admin/Onboarding/PluginManager.php',
        'Hostinger\\EasyOnboarding\\Admin\\Onboarding\\Settings' => __DIR__ . '/../..' . '/includes/Admin/Onboarding/Settings.php',
        'Hostinger\\EasyOnboarding\\Admin\\Onboarding\\Step' => __DIR__ . '/../..' . '/includes/Admin/Onboarding/Step.php',
        'Hostinger\\EasyOnboarding\\Admin\\Onboarding\\StepCategory' => __DIR__ . '/../..' . '/includes/Admin/Onboarding/StepCategory.php',
        'Hostinger\\EasyOnboarding\\Admin\\Onboarding\\WelcomeCards' => __DIR__ . '/../..' . '/includes/Admin/Onboarding/WelcomeCards.php',
        'Hostinger\\EasyOnboarding\\Admin\\Partnership' => __DIR__ . '/../..' . '/includes/Admin/Partnership.php',
        'Hostinger\\EasyOnboarding\\Admin\\Redirects' => __DIR__ . '/../..' . '/includes/Admin/Redirects.php',
        'Hostinger\\EasyOnboarding\\Admin\\Surveys' => __DIR__ . '/../..' . '/includes/Admin/Surveys.php',
        'Hostinger\\EasyOnboarding\\AmplitudeEvents\\Actions' => __DIR__ . '/../..' . '/includes/AmplitudeEvents/Actions.php',
        'Hostinger\\EasyOnboarding\\AmplitudeEvents\\Amplitude' => __DIR__ . '/../..' . '/includes/AmplitudeEvents/Amplitude.php',
        'Hostinger\\EasyOnboarding\\Bootstrap' => __DIR__ . '/../..' . '/includes/Bootstrap.php',
        'Hostinger\\EasyOnboarding\\Cli' => __DIR__ . '/../..' . '/includes/Cli.php',
        'Hostinger\\EasyOnboarding\\Cli\\Commands\\CLICommand' => __DIR__ . '/../..' . '/includes/Cli/Commands/CLICommand.php',
        'Hostinger\\EasyOnboarding\\Cli\\Commands\\OnboardingStatus' => __DIR__ . '/../..' . '/includes/Cli/Commands/OnboardingStatus.php',
        'Hostinger\\EasyOnboarding\\Config' => __DIR__ . '/../..' . '/includes/Config.php',
        'Hostinger\\EasyOnboarding\\Deactivator' => __DIR__ . '/../..' . '/includes/Deactivator.php',
        'Hostinger\\EasyOnboarding\\DefaultOptions' => __DIR__ . '/../..' . '/includes/DefaultOptions.php',
        'Hostinger\\EasyOnboarding\\EasyOnboarding' => __DIR__ . '/../..' . '/includes/EasyOnboarding.php',
        'Hostinger\\EasyOnboarding\\Helper' => __DIR__ . '/../..' . '/includes/Helper.php',
        'Hostinger\\EasyOnboarding\\Hooks' => __DIR__ . '/../..' . '/includes/Hooks.php',
        'Hostinger\\EasyOnboarding\\I18n' => __DIR__ . '/../..' . '/includes/I18n.php',
        'Hostinger\\EasyOnboarding\\Loader' => __DIR__ . '/../..' . '/includes/Loader.php',
        'Hostinger\\EasyOnboarding\\Preview\\Assets' => __DIR__ . '/../..' . '/includes/Preview/Assets.php',
        'Hostinger\\EasyOnboarding\\Requests\\Client' => __DIR__ . '/../..' . '/includes/Requests/Client.php',
        'Hostinger\\EasyOnboarding\\Rest\\Routes' => __DIR__ . '/../..' . '/includes/Rest/Routes.php',
        'Hostinger\\EasyOnboarding\\Rest\\StepRoutes' => __DIR__ . '/../..' . '/includes/Rest/StepRoutes.php',
        'Hostinger\\EasyOnboarding\\Rest\\WelcomeRoutes' => __DIR__ . '/../..' . '/includes/Rest/WelcomeRoutes.php',
        'Hostinger\\EasyOnboarding\\Rest\\WooRoutes' => __DIR__ . '/../..' . '/includes/Rest/WooRoutes.php',
        'Hostinger\\EasyOnboarding\\Settings' => __DIR__ . '/../..' . '/includes/Settings.php',
        'Hostinger\\EasyOnboarding\\Updates' => __DIR__ . '/../..' . '/includes/Updates.php',
        'Hostinger\\EasyOnboarding\\WooCommerce\\GatewayManager' => __DIR__ . '/../..' . '/includes/WooCommerce/GatewayManager.php',
        'Hostinger\\EasyOnboarding\\WooCommerce\\Options' => __DIR__ . '/../..' . '/includes/WooCommerce/Options.php',
        'Hostinger\\Surveys\\Ajax' => __DIR__ . '/..' . '/hostinger/hostinger-wp-surveys/src/Ajax.php',
        'Hostinger\\Surveys\\Assets' => __DIR__ . '/..' . '/hostinger/hostinger-wp-surveys/src/Assets.php',
        'Hostinger\\Surveys\\Loader' => __DIR__ . '/..' . '/hostinger/hostinger-wp-surveys/src/Loader.php',
        'Hostinger\\Surveys\\Rest' => __DIR__ . '/..' . '/hostinger/hostinger-wp-surveys/src/Rest.php',
        'Hostinger\\Surveys\\SurveyLoader' => __DIR__ . '/..' . '/hostinger/hostinger-wp-surveys/src/SurveyLoader.php',
        'Hostinger\\Surveys\\SurveyManager' => __DIR__ . '/..' . '/hostinger/hostinger-wp-surveys/src/SurveyManager.php',
        'Hostinger\\WpHelper\\Config' => __DIR__ . '/..' . '/hostinger/hostinger-wp-helper/src/Config.php',
        'Hostinger\\WpHelper\\Constants' => __DIR__ . '/..' . '/hostinger/hostinger-wp-helper/src/Constants.php',
        'Hostinger\\WpHelper\\Requests\\Client' => __DIR__ . '/..' . '/hostinger/hostinger-wp-helper/src/Requests/Client.php',
        'Hostinger\\WpHelper\\Utils' => __DIR__ . '/..' . '/hostinger/hostinger-wp-helper/src/Utils.php',
        'Hostinger\\WpMenuManager\\Assets' => __DIR__ . '/..' . '/hostinger/hostinger-wp-menu-manager/src/Assets.php',
        'Hostinger\\WpMenuManager\\Manager' => __DIR__ . '/..' . '/hostinger/hostinger-wp-menu-manager/src/Manager.php',
        'Hostinger\\WpMenuManager\\Menus' => __DIR__ . '/..' . '/hostinger/hostinger-wp-menu-manager/src/Menus.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit355c18229fe47c20ad676cad3dd03349::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit355c18229fe47c20ad676cad3dd03349::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit355c18229fe47c20ad676cad3dd03349::$classMap;

        }, null, ClassLoader::class);
    }
}

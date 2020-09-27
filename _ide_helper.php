
<?php
// @formatter:off

/**
 * A helper file for Laravel, to provide autocomplete information to your IDE
 * Generated for Laravel 7.25.0.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

    namespace Illuminate\Support\Facades { 
            /**
     * 
     *
     * @see \Illuminate\Contracts\Foundation\Application
     */ 
        class App {
                    /**
         * Get the version number of the application.
         *
         * @return string 
         * @static 
         */ 
        public static function version()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->version();
        }
                    /**
         * Run the given array of bootstrap classes.
         *
         * @param string[] $bootstrappers
         * @return void 
         * @static 
         */ 
        public static function bootstrapWith($bootstrappers)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->bootstrapWith($bootstrappers);
        }
                    /**
         * Register a callback to run after loading the environment.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function afterLoadingEnvironment($callback)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->afterLoadingEnvironment($callback);
        }
                    /**
         * Register a callback to run before a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function beforeBootstrapping($bootstrapper, $callback)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->beforeBootstrapping($bootstrapper, $callback);
        }
                    /**
         * Register a callback to run after a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function afterBootstrapping($bootstrapper, $callback)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->afterBootstrapping($bootstrapper, $callback);
        }
                    /**
         * Determine if the application has been bootstrapped before.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasBeenBootstrapped()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->hasBeenBootstrapped();
        }
                    /**
         * Set the base path for the application.
         *
         * @param string $basePath
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function setBasePath($basePath)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->setBasePath($basePath);
        }
                    /**
         * Get the path to the application "app" directory.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function path($path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->path($path);
        }
                    /**
         * Set the application directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function useAppPath($path)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->useAppPath($path);
        }
                    /**
         * Get the base path of the Laravel installation.
         *
         * @param string $path Optionally, a path to append to the base path
         * @return string 
         * @static 
         */ 
        public static function basePath($path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->basePath($path);
        }
                    /**
         * Get the path to the bootstrap directory.
         *
         * @param string $path Optionally, a path to append to the bootstrap path
         * @return string 
         * @static 
         */ 
        public static function bootstrapPath($path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->bootstrapPath($path);
        }
                    /**
         * Get the path to the application configuration files.
         *
         * @param string $path Optionally, a path to append to the config path
         * @return string 
         * @static 
         */ 
        public static function configPath($path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->configPath($path);
        }
                    /**
         * Get the path to the database directory.
         *
         * @param string $path Optionally, a path to append to the database path
         * @return string 
         * @static 
         */ 
        public static function databasePath($path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->databasePath($path);
        }
                    /**
         * Set the database directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function useDatabasePath($path)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->useDatabasePath($path);
        }
                    /**
         * Get the path to the language files.
         *
         * @return string 
         * @static 
         */ 
        public static function langPath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->langPath();
        }
                    /**
         * Get the path to the public / web directory.
         *
         * @return string 
         * @static 
         */ 
        public static function publicPath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->publicPath();
        }
                    /**
         * Get the path to the storage directory.
         *
         * @return string 
         * @static 
         */ 
        public static function storagePath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->storagePath();
        }
                    /**
         * Set the storage directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function useStoragePath($path)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->useStoragePath($path);
        }
                    /**
         * Get the path to the resources directory.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function resourcePath($path = '')
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->resourcePath($path);
        }
                    /**
         * Get the path to the environment file directory.
         *
         * @return string 
         * @static 
         */ 
        public static function environmentPath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->environmentPath();
        }
                    /**
         * Set the directory for the environment file.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function useEnvironmentPath($path)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->useEnvironmentPath($path);
        }
                    /**
         * Set the environment file to be loaded during bootstrapping.
         *
         * @param string $file
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function loadEnvironmentFrom($file)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->loadEnvironmentFrom($file);
        }
                    /**
         * Get the environment file the application is using.
         *
         * @return string 
         * @static 
         */ 
        public static function environmentFile()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->environmentFile();
        }
                    /**
         * Get the fully qualified path to the environment file.
         *
         * @return string 
         * @static 
         */ 
        public static function environmentFilePath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->environmentFilePath();
        }
                    /**
         * Get or check the current application environment.
         *
         * @param string|array $environments
         * @return string|bool 
         * @static 
         */ 
        public static function environment(...$environments)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->environment(...$environments);
        }
                    /**
         * Determine if application is in local environment.
         *
         * @return bool 
         * @static 
         */ 
        public static function isLocal()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->isLocal();
        }
                    /**
         * Determine if application is in production environment.
         *
         * @return bool 
         * @static 
         */ 
        public static function isProduction()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->isProduction();
        }
                    /**
         * Detect the application's current environment.
         *
         * @param \Closure $callback
         * @return string 
         * @static 
         */ 
        public static function detectEnvironment($callback)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->detectEnvironment($callback);
        }
                    /**
         * Determine if the application is running in the console.
         *
         * @return bool 
         * @static 
         */ 
        public static function runningInConsole()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->runningInConsole();
        }
                    /**
         * Determine if the application is running unit tests.
         *
         * @return bool 
         * @static 
         */ 
        public static function runningUnitTests()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->runningUnitTests();
        }
                    /**
         * Register all of the configured providers.
         *
         * @return void 
         * @static 
         */ 
        public static function registerConfiguredProviders()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->registerConfiguredProviders();
        }
                    /**
         * Register a service provider with the application.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @param bool $force
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */ 
        public static function register($provider, $force = false)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->register($provider, $force);
        }
                    /**
         * Get the registered service provider instance if it exists.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @return \Illuminate\Support\ServiceProvider|null 
         * @static 
         */ 
        public static function getProvider($provider)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getProvider($provider);
        }
                    /**
         * Get the registered service provider instances if any exist.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @return array 
         * @static 
         */ 
        public static function getProviders($provider)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getProviders($provider);
        }
                    /**
         * Resolve a service provider instance from the class name.
         *
         * @param string $provider
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */ 
        public static function resolveProvider($provider)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->resolveProvider($provider);
        }
                    /**
         * Load and boot all of the remaining deferred providers.
         *
         * @return void 
         * @static 
         */ 
        public static function loadDeferredProviders()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->loadDeferredProviders();
        }
                    /**
         * Load the provider for a deferred service.
         *
         * @param string $service
         * @return void 
         * @static 
         */ 
        public static function loadDeferredProvider($service)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->loadDeferredProvider($service);
        }
                    /**
         * Register a deferred provider and service.
         *
         * @param string $provider
         * @param string|null $service
         * @return void 
         * @static 
         */ 
        public static function registerDeferredProvider($provider, $service = null)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->registerDeferredProvider($provider, $service);
        }
                    /**
         * Resolve the given type from the container.
         *
         * @param string $abstract
         * @param array $parameters
         * @return mixed 
         * @static 
         */ 
        public static function make($abstract, $parameters = [])
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->make($abstract, $parameters);
        }
                    /**
         * Determine if the given abstract type has been bound.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */ 
        public static function bound($abstract)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->bound($abstract);
        }
                    /**
         * Determine if the application has booted.
         *
         * @return bool 
         * @static 
         */ 
        public static function isBooted()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->isBooted();
        }
                    /**
         * Boot the application's service providers.
         *
         * @return void 
         * @static 
         */ 
        public static function boot()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->boot();
        }
                    /**
         * Register a new boot listener.
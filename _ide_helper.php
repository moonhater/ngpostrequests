
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
         *
         * @param callable $callback
         * @return void 
         * @static 
         */ 
        public static function booting($callback)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->booting($callback);
        }
                    /**
         * Register a new "booted" listener.
         *
         * @param callable $callback
         * @return void 
         * @static 
         */ 
        public static function booted($callback)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->booted($callback);
        }
                    /**
         * {@inheritdoc}
         *
         * @static 
         */ 
        public static function handle($request, $type = 1, $catch = true)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->handle($request, $type, $catch);
        }
                    /**
         * Determine if middleware has been disabled for the application.
         *
         * @return bool 
         * @static 
         */ 
        public static function shouldSkipMiddleware()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->shouldSkipMiddleware();
        }
                    /**
         * Get the path to the cached services.php file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedServicesPath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getCachedServicesPath();
        }
                    /**
         * Get the path to the cached packages.php file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedPackagesPath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getCachedPackagesPath();
        }
                    /**
         * Determine if the application configuration is cached.
         *
         * @return bool 
         * @static 
         */ 
        public static function configurationIsCached()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->configurationIsCached();
        }
                    /**
         * Get the path to the configuration cache file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedConfigPath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getCachedConfigPath();
        }
                    /**
         * Determine if the application routes are cached.
         *
         * @return bool 
         * @static 
         */ 
        public static function routesAreCached()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->routesAreCached();
        }
                    /**
         * Get the path to the routes cache file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedRoutesPath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getCachedRoutesPath();
        }
                    /**
         * Determine if the application events are cached.
         *
         * @return bool 
         * @static 
         */ 
        public static function eventsAreCached()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->eventsAreCached();
        }
                    /**
         * Get the path to the events cache file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedEventsPath()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getCachedEventsPath();
        }
                    /**
         * Add new prefix to list of absolute path prefixes.
         *
         * @param string $prefix
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function addAbsoluteCachePathPrefix($prefix)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->addAbsoluteCachePathPrefix($prefix);
        }
                    /**
         * Determine if the application is currently down for maintenance.
         *
         * @return bool 
         * @static 
         */ 
        public static function isDownForMaintenance()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->isDownForMaintenance();
        }
                    /**
         * Throw an HttpException with the given data.
         *
         * @param int $code
         * @param string $message
         * @param array $headers
         * @return void 
         * @throws \Symfony\Component\HttpKernel\Exception\HttpException
         * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
         * @static 
         */ 
        public static function abort($code, $message = '', $headers = [])
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->abort($code, $message, $headers);
        }
                    /**
         * Register a terminating callback with the application.
         *
         * @param callable|string $callback
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function terminating($callback)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->terminating($callback);
        }
                    /**
         * Terminate the application.
         *
         * @return void 
         * @static 
         */ 
        public static function terminate()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->terminate();
        }
                    /**
         * Get the service providers that have been loaded.
         *
         * @return array 
         * @static 
         */ 
        public static function getLoadedProviders()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getLoadedProviders();
        }
                    /**
         * Determine if the given service provider is loaded.
         *
         * @param string $provider
         * @return bool 
         * @static 
         */ 
        public static function providerIsLoaded($provider)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->providerIsLoaded($provider);
        }
                    /**
         * Get the application's deferred services.
         *
         * @return array 
         * @static 
         */ 
        public static function getDeferredServices()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getDeferredServices();
        }
                    /**
         * Set the application's deferred services.
         *
         * @param array $services
         * @return void 
         * @static 
         */ 
        public static function setDeferredServices($services)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->setDeferredServices($services);
        }
                    /**
         * Add an array of services to the application's deferred services.
         *
         * @param array $services
         * @return void 
         * @static 
         */ 
        public static function addDeferredServices($services)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->addDeferredServices($services);
        }
                    /**
         * Determine if the given service is a deferred service.
         *
         * @param string $service
         * @return bool 
         * @static 
         */ 
        public static function isDeferredService($service)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->isDeferredService($service);
        }
                    /**
         * Configure the real-time facade namespace.
         *
         * @param string $namespace
         * @return void 
         * @static 
         */ 
        public static function provideFacades($namespace)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->provideFacades($namespace);
        }
                    /**
         * Get the current application locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getLocale()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getLocale();
        }
                    /**
         * Get the current application fallback locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getFallbackLocale()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getFallbackLocale();
        }
                    /**
         * Set the current application locale.
         *
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function setLocale($locale)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->setLocale($locale);
        }
                    /**
         * Set the current application fallback locale.
         *
         * @param string $fallbackLocale
         * @return void 
         * @static 
         */ 
        public static function setFallbackLocale($fallbackLocale)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->setFallbackLocale($fallbackLocale);
        }
                    /**
         * Determine if application locale is the given locale.
         *
         * @param string $locale
         * @return bool 
         * @static 
         */ 
        public static function isLocale($locale)
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->isLocale($locale);
        }
                    /**
         * Register the core class aliases in the container.
         *
         * @return void 
         * @static 
         */ 
        public static function registerCoreContainerAliases()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->registerCoreContainerAliases();
        }
                    /**
         * Flush the container of all bindings and resolved instances.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->flush();
        }
                    /**
         * Get the application namespace.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function getNamespace()
        {
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getNamespace();
        }
                    /**
         * Define a contextual binding.
         *
         * @param array|string $concrete
         * @return \Illuminate\Contracts\Container\ContextualBindingBuilder 
         * @static 
         */ 
        public static function when($concrete)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->when($concrete);
        }
                    /**
         * Returns true if the container can return an entry for the given identifier.
         * 
         * Returns false otherwise.
         * 
         * `has($id)` returning true does not mean that `get($id)` will not throw an exception.
         * It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.
         *
         * @param string $id Identifier of the entry to look for.
         * @return bool 
         * @static 
         */ 
        public static function has($id)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->has($id);
        }
                    /**
         * Determine if the given abstract type has been resolved.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */ 
        public static function resolved($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->resolved($abstract);
        }
                    /**
         * Determine if a given type is shared.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */ 
        public static function isShared($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->isShared($abstract);
        }
                    /**
         * Determine if a given string is an alias.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function isAlias($name)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->isAlias($name);
        }
                    /**
         * Register a binding with the container.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */ 
        public static function bind($abstract, $concrete = null, $shared = false)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->bind($abstract, $concrete, $shared);
        }
                    /**
         * Determine if the container has a method binding.
         *
         * @param string $method
         * @return bool 
         * @static 
         */ 
        public static function hasMethodBinding($method)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->hasMethodBinding($method);
        }
                    /**
         * Bind a callback to resolve with Container::call.
         *
         * @param array|string $method
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function bindMethod($method, $callback)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->bindMethod($method, $callback);
        }
                    /**
         * Get the method binding for the given method.
         *
         * @param string $method
         * @param mixed $instance
         * @return mixed 
         * @static 
         */ 
        public static function callMethodBinding($method, $instance)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->callMethodBinding($method, $instance);
        }
                    /**
         * Add a contextual binding to the container.
         *
         * @param string $concrete
         * @param string $abstract
         * @param \Closure|string $implementation
         * @return void 
         * @static 
         */ 
        public static function addContextualBinding($concrete, $abstract, $implementation)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->addContextualBinding($concrete, $abstract, $implementation);
        }
                    /**
         * Register a binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */ 
        public static function bindIf($abstract, $concrete = null, $shared = false)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->bindIf($abstract, $concrete, $shared);
        }
                    /**
         * Register a shared binding in the container.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @return void 
         * @static 
         */ 
        public static function singleton($abstract, $concrete = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->singleton($abstract, $concrete);
        }
                    /**
         * Register a shared binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @return void 
         * @static 
         */ 
        public static function singletonIf($abstract, $concrete = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->singletonIf($abstract, $concrete);
        }
                    /**
         * "Extend" an abstract type in the container.
         *
         * @param string $abstract
         * @param \Closure $closure
         * @return void 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function extend($abstract, $closure)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->extend($abstract, $closure);
        }
                    /**
         * Register an existing instance as shared in the container.
         *
         * @param string $abstract
         * @param mixed $instance
         * @return mixed 
         * @static 
         */ 
        public static function instance($abstract, $instance)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->instance($abstract, $instance);
        }
                    /**
         * Assign a set of tags to a given binding.
         *
         * @param array|string $abstracts
         * @param array|mixed $tags
         * @return void 
         * @static 
         */ 
        public static function tag($abstracts, $tags)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->tag($abstracts, $tags);
        }
                    /**
         * Resolve all of the bindings for a given tag.
         *
         * @param string $tag
         * @return \Illuminate\Container\iterable 
         * @static 
         */ 
        public static function tagged($tag)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->tagged($tag);
        }
                    /**
         * Alias a type to a different name.
         *
         * @param string $abstract
         * @param string $alias
         * @return void 
         * @throws \LogicException
         * @static 
         */ 
        public static function alias($abstract, $alias)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->alias($abstract, $alias);
        }
                    /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param string $abstract
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function rebinding($abstract, $callback)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->rebinding($abstract, $callback);
        }
                    /**
         * Refresh an instance on the given target and method.
         *
         * @param string $abstract
         * @param mixed $target
         * @param string $method
         * @return mixed 
         * @static 
         */ 
        public static function refresh($abstract, $target, $method)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->refresh($abstract, $target, $method);
        }
                    /**
         * Wrap the given closure such that its dependencies will be injected when executed.
         *
         * @param \Closure $callback
         * @param array $parameters
         * @return \Closure 
         * @static 
         */ 
        public static function wrap($callback, $parameters = [])
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->wrap($callback, $parameters);
        }
                    /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param callable|string $callback
         * @param \Illuminate\Container\array<string,  mixed>  $parameters
         * @param string|null $defaultMethod
         * @return mixed 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function call($callback, $parameters = [], $defaultMethod = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->call($callback, $parameters, $defaultMethod);
        }
                    /**
         * Get a closure to resolve the given type from the container.
         *
         * @param string $abstract
         * @return \Closure 
         * @static 
         */ 
        public static function factory($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->factory($abstract);
        }
                    /**
         * An alias function name for make().
         *
         * @param string $abstract
         * @param array $parameters
         * @return mixed 
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static 
         */ 
        public static function makeWith($abstract, $parameters = [])
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->makeWith($abstract, $parameters);
        }
                    /**
         * Finds an entry of the container by its identifier and returns it.
         *
         * @param string $id Identifier of the entry to look for.
         * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
         * @throws ContainerExceptionInterface Error while retrieving the entry.
         * @return mixed Entry.
         * @static 
         */ 
        public static function get($id)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->get($id);
        }
                    /**
         * Instantiate a concrete instance of the given type.
         *
         * @param \Closure|string $concrete
         * @return mixed 
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static 
         */ 
        public static function build($concrete)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->build($concrete);
        }
                    /**
         * Register a new resolving callback.
         *
         * @param \Closure|string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */ 
        public static function resolving($abstract, $callback = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->resolving($abstract, $callback);
        }
                    /**
         * Register a new after resolving callback for all types.
         *
         * @param \Closure|string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */ 
        public static function afterResolving($abstract, $callback = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->afterResolving($abstract, $callback);
        }
                    /**
         * Get the container's bindings.
         *
         * @return array 
         * @static 
         */ 
        public static function getBindings()
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getBindings();
        }
                    /**
         * Get the alias for an abstract if available.
         *
         * @param string $abstract
         * @return string 
         * @static 
         */ 
        public static function getAlias($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->getAlias($abstract);
        }
                    /**
         * Remove all of the extender callbacks for a given type.
         *
         * @param string $abstract
         * @return void 
         * @static 
         */ 
        public static function forgetExtenders($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->forgetExtenders($abstract);
        }
                    /**
         * Remove a resolved instance from the instance cache.
         *
         * @param string $abstract
         * @return void 
         * @static 
         */ 
        public static function forgetInstance($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->forgetInstance($abstract);
        }
                    /**
         * Clear all of the instances from the container.
         *
         * @return void 
         * @static 
         */ 
        public static function forgetInstances()
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->forgetInstances();
        }
                    /**
         * Get the globally available instance of the container.
         *
         * @return static 
         * @static 
         */ 
        public static function getInstance()
        {            //Method inherited from \Illuminate\Container\Container         
                        return \Illuminate\Foundation\Application::getInstance();
        }
                    /**
         * Set the shared instance of the container.
         *
         * @param \Illuminate\Contracts\Container\Container|null $container
         * @return \Illuminate\Contracts\Container\Container|static 
         * @static 
         */ 
        public static function setInstance($container = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        return \Illuminate\Foundation\Application::setInstance($container);
        }
                    /**
         * Determine if a given offset exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->offsetExists($key);
        }
                    /**
         * Get the value at a given offset.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        return $instance->offsetGet($key);
        }
                    /**
         * Set the value at a given offset.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->offsetSet($key, $value);
        }
                    /**
         * Unset the value at a given offset.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \Illuminate\Foundation\Application $instance */
                        $instance->offsetUnset($key);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Contracts\Console\Kernel
     */ 
        class Artisan {
                    /**
         * Run the console application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param \Symfony\Component\Console\Output\OutputInterface|null $output
         * @return int 
         * @static 
         */ 
        public static function handle($input, $output = null)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->handle($input, $output);
        }
                    /**
         * Terminate the application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param int $status
         * @return void 
         * @static 
         */ 
        public static function terminate($input, $status)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        $instance->terminate($input, $status);
        }
                    /**
         * Register a Closure based command with the application.
         *
         * @param string $signature
         * @param \Closure $callback
         * @return \Illuminate\Foundation\Console\ClosureCommand 
         * @static 
         */ 
        public static function command($signature, $callback)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->command($signature, $callback);
        }
                    /**
         * Register the given command with the console application.
         *
         * @param \Symfony\Component\Console\Command\Command $command
         * @return void 
         * @static 
         */ 
        public static function registerCommand($command)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        $instance->registerCommand($command);
        }
                    /**
         * Run an Artisan console command by name.
         *
         * @param string $command
         * @param array $parameters
         * @param \Symfony\Component\Console\Output\OutputInterface|null $outputBuffer
         * @return int 
         * @throws \Symfony\Component\Console\Exception\CommandNotFoundException
         * @static 
         */ 
        public static function call($command, $parameters = [], $outputBuffer = null)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->call($command, $parameters, $outputBuffer);
        }
                    /**
         * Queue the given console command.
         *
         * @param string $command
         * @param array $parameters
         * @return \Illuminate\Foundation\Bus\PendingDispatch 
         * @static 
         */ 
        public static function queue($command, $parameters = [])
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->queue($command, $parameters);
        }
                    /**
         * Get all of the commands registered with the console.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->all();
        }
                    /**
         * Get the output for the last run command.
         *
         * @return string 
         * @static 
         */ 
        public static function output()
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        return $instance->output();
        }
                    /**
         * Bootstrap the application for artisan commands.
         *
         * @return void 
         * @static 
         */ 
        public static function bootstrap()
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        $instance->bootstrap();
        }
                    /**
         * Set the Artisan application instance.
         *
         * @param \Illuminate\Console\Application $artisan
         * @return void 
         * @static 
         */ 
        public static function setArtisan($artisan)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \App\Console\Kernel $instance */
                        $instance->setArtisan($artisan);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Auth\AuthManager
     * @see \Illuminate\Contracts\Auth\Factory
     * @see \Illuminate\Contracts\Auth\Guard
     * @see \Illuminate\Contracts\Auth\StatefulGuard
     */ 
        class Auth {
                    /**
         * Attempt to get the guard from the local cache.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard 
         * @static 
         */ 
        public static function guard($name = null)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->guard($name);
        }
                    /**
         * Create a session based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */ 
        public static function createSessionDriver($name, $config)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->createSessionDriver($name, $config);
        }
                    /**
         * Create a token based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return \Illuminate\Auth\TokenGuard 
         * @static 
         */ 
        public static function createTokenDriver($name, $config)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->createTokenDriver($name, $config);
        }
                    /**
         * Get the default authentication driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * Set the default guard driver the factory should serve.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function shouldUse($name)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        $instance->shouldUse($name);
        }
                    /**
         * Set the default authentication driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        $instance->setDefaultDriver($name);
        }
                    /**
         * Register a new callback based request guard.
         *
         * @param string $driver
         * @param callable $callback
         * @return \Illuminate\Auth\AuthManager 
         * @static 
         */ 
        public static function viaRequest($driver, $callback)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->viaRequest($driver, $callback);
        }
                    /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function userResolver()
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->userResolver();
        }
                    /**
         * Set the callback to be used to resolve users.
         *
         * @param \Closure $userResolver
         * @return \Illuminate\Auth\AuthManager 
         * @static 
         */ 
        public static function resolveUsersUsing($userResolver)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->resolveUsersUsing($userResolver);
        }
                    /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Auth\AuthManager 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * Register a custom provider creator Closure.
         *
         * @param string $name
         * @param \Closure $callback
         * @return \Illuminate\Auth\AuthManager 
         * @static 
         */ 
        public static function provider($name, $callback)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->provider($name, $callback);
        }
                    /**
         * Determines if any guards have already been resolved.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasResolvedGuards()
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->hasResolvedGuards();
        }
                    /**
         * Create the user provider implementation for the driver.
         *
         * @param string|null $provider
         * @return \Illuminate\Contracts\Auth\UserProvider|null 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function createUserProvider($provider = null)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->createUserProvider($provider);
        }
                    /**
         * Get the default user provider name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultUserProvider()
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->getDefaultUserProvider();
        }
                    /**
         * Get the currently authenticated user.
         *
         * @return \App\User|null 
         * @static 
         */ 
        public static function user()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->user();
        }
                    /**
         * Get the ID for the currently authenticated user.
         *
         * @return int|string|null 
         * @static 
         */ 
        public static function id()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->id();
        }
                    /**
         * Log a user into the application without sessions or cookies.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */ 
        public static function once($credentials = [])
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->once($credentials);
        }
                    /**
         * Log the given user ID into the application without sessions or cookies.
         *
         * @param mixed $id
         * @return \App\User|false 
         * @static 
         */ 
        public static function onceUsingId($id)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->onceUsingId($id);
        }
                    /**
         * Validate a user's credentials.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */ 
        public static function validate($credentials = [])
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->validate($credentials);
        }
                    /**
         * Attempt to authenticate using HTTP Basic Auth.
         *
         * @param string $field
         * @param array $extraConditions
         * @return \Symfony\Component\HttpFoundation\Response|null 
         * @static 
         */ 
        public static function basic($field = 'email', $extraConditions = [])
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->basic($field, $extraConditions);
        }
                    /**
         * Perform a stateless HTTP Basic login attempt.
         *
         * @param string $field
         * @param array $extraConditions
         * @return \Symfony\Component\HttpFoundation\Response|null 
         * @static 
         */ 
        public static function onceBasic($field = 'email', $extraConditions = [])
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->onceBasic($field, $extraConditions);
        }
                    /**
         * Attempt to authenticate a user using the given credentials.
         *
         * @param array $credentials
         * @param bool $remember
         * @return bool 
         * @static 
         */ 
        public static function attempt($credentials = [], $remember = false)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->attempt($credentials, $remember);
        }
                    /**
         * Log the given user ID into the application.
         *
         * @param mixed $id
         * @param bool $remember
         * @return \App\User|false 
         * @static 
         */ 
        public static function loginUsingId($id, $remember = false)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->loginUsingId($id, $remember);
        }
                    /**
         * Log a user into the application.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         * @param bool $remember
         * @return void 
         * @static 
         */ 
        public static function login($user, $remember = false)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        $instance->login($user, $remember);
        }
                    /**
         * Log the user out of the application.
         *
         * @return void 
         * @static 
         */ 
        public static function logout()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        $instance->logout();
        }
                    /**
         * Log the user out of the application on their current device only.
         *
         * @return void 
         * @static 
         */ 
        public static function logoutCurrentDevice()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        $instance->logoutCurrentDevice();
        }
                    /**
         * Invalidate other sessions for the current user.
         * 
         * The application must be using the AuthenticateSession middleware.
         *
         * @param string $password
         * @param string $attribute
         * @return bool|null 
         * @static 
         */ 
        public static function logoutOtherDevices($password, $attribute = 'password')
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->logoutOtherDevices($password, $attribute);
        }
                    /**
         * Register an authentication attempt event listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function attempting($callback)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        $instance->attempting($callback);
        }
                    /**
         * Get the last user we attempted to authenticate.
         *
         * @return \App\User 
         * @static 
         */ 
        public static function getLastAttempted()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getLastAttempted();
        }
                    /**
         * Get a unique identifier for the auth session value.
         *
         * @return string 
         * @static 
         */ 
        public static function getName()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getName();
        }
                    /**
         * Get the name of the cookie used to store the "recaller".
         *
         * @return string 
         * @static 
         */ 
        public static function getRecallerName()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getRecallerName();
        }
                    /**
         * Determine if the user was authenticated via "remember me" cookie.
         *
         * @return bool 
         * @static 
         */ 
        public static function viaRemember()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->viaRemember();
        }
                    /**
         * Get the cookie creator instance used by the guard.
         *
         * @return \Illuminate\Contracts\Cookie\QueueingFactory 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function getCookieJar()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getCookieJar();
        }
                    /**
         * Set the cookie creator instance used by the guard.
         *
         * @param \Illuminate\Contracts\Cookie\QueueingFactory $cookie
         * @return void 
         * @static 
         */ 
        public static function setCookieJar($cookie)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        $instance->setCookieJar($cookie);
        }
                    /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getDispatcher()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getDispatcher();
        }
                    /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setDispatcher($events)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        $instance->setDispatcher($events);
        }
                    /**
         * Get the session store used by the guard.
         *
         * @return \Illuminate\Contracts\Session\Session 
         * @static 
         */ 
        public static function getSession()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getSession();
        }
                    /**
         * Return the currently cached user.
         *
         * @return \App\User|null 
         * @static 
         */ 
        public static function getUser()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getUser();
        }
                    /**
         * Set the current user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */ 
        public static function setUser($user)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->setUser($user);
        }
                    /**
         * Get the current request instance.
         *
         * @return \Symfony\Component\HttpFoundation\Request 
         * @static 
         */ 
        public static function getRequest()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getRequest();
        }
                    /**
         * Set the current request instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */ 
        public static function setRequest($request)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->setRequest($request);
        }
                    /**
         * Determine if current user is authenticated. If not, throw an exception.
         *
         * @return \App\User 
         * @throws \Illuminate\Auth\AuthenticationException
         * @static 
         */ 
        public static function authenticate()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->authenticate();
        }
                    /**
         * Determine if the guard has a user instance.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasUser()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->hasUser();
        }
                    /**
         * Determine if the current user is authenticated.
         *
         * @return bool 
         * @static 
         */ 
        public static function check()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->check();
        }
                    /**
         * Determine if the current user is a guest.
         *
         * @return bool 
         * @static 
         */ 
        public static function guest()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->guest();
        }
                    /**
         * Get the user provider used by the guard.
         *
         * @return \Illuminate\Contracts\Auth\UserProvider 
         * @static 
         */ 
        public static function getProvider()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getProvider();
        }
                    /**
         * Set the user provider used by the guard.
         *
         * @param \Illuminate\Contracts\Auth\UserProvider $provider
         * @return void 
         * @static 
         */ 
        public static function setProvider($provider)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        $instance->setProvider($provider);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        \Illuminate\Auth\SessionGuard::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        \Illuminate\Auth\SessionGuard::mixin($mixin, $replace);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Auth\SessionGuard::hasMacro($name);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\View\Compilers\BladeCompiler
     */ 
        class Blade {
                    /**
         * Compile the view at the given path.
         *
         * @param string|null $path
         * @return void 
         * @static 
         */ 
        public static function compile($path = null)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        $instance->compile($path);
        }
                    /**
         * Get the path currently being compiled.
         *
         * @return string 
         * @static 
         */ 
        public static function getPath()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->getPath();
        }
                    /**
         * Set the path currently being compiled.
         *
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function setPath($path)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        $instance->setPath($path);
        }
                    /**
         * Compile the given Blade template contents.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function compileString($value)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->compileString($value);
        }
                    /**
         * Strip the parentheses from the given expression.
         *
         * @param string $expression
         * @return string 
         * @static 
         */ 
        public static function stripParentheses($expression)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->stripParentheses($expression);
        }
                    /**
         * Register a custom Blade compiler.
         *
         * @param callable $compiler
         * @return void 
         * @static 
         */ 
        public static function extend($compiler)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        $instance->extend($compiler);
        }
                    /**
         * Get the extensions used by the compiler.
         *
         * @return array 
         * @static 
         */ 
        public static function getExtensions()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->getExtensions();
        }
                    /**
         * Register an "if" statement directive.
         *
         * @param string $name
         * @param callable $callback
         * @return void 
         * @static 
         */ 
        public static function if($name, $callback)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        $instance->if($name, $callback);
        }
                    /**
         * Check the result of a condition.
         *
         * @param string $name
         * @param array $parameters
         * @return bool 
         * @static 
         */ 
        public static function check($name, ...$parameters)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->check($name, ...$parameters);
        }
                    /**
         * Register a class-based component alias directive.
         *
         * @param string $class
         * @param string|null $alias
         * @param string $prefix
         * @return void 
         * @static 
         */ 
        public static function component($class, $alias = null, $prefix = '')
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        $instance->component($class, $alias, $prefix);
        }
                    /**
         * Register an array of class-based components.
         *
         * @param array $components
         * @param string $prefix
         * @return void 
         * @static 
         */ 
        public static function components($components, $prefix = '')
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        $instance->components($components, $prefix);
        }
                    /**
         * Get the registered class component aliases.
         *
         * @return array 
         * @static 
         */ 
        public static function getClassComponentAliases()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->getClassComponentAliases();
        }
                    /**
         * Register a component alias directive.
         *
         * @param string $path
         * @param string|null $alias
         * @return void 
         * @static 
         */ 
        public static function aliasComponent($path, $alias = null)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        $instance->aliasComponent($path, $alias);
        }
                    /**
         * Register an include alias directive.
         *
         * @param string $path
         * @param string|null $alias
         * @return void 
         * @static 
         */ 
        public static function include($path, $alias = null)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        $instance->include($path, $alias);
        }
                    /**
         * Register an include alias directive.
         *
         * @param string $path
         * @param string|null $alias
         * @return void 
         * @static 
         */ 
        public static function aliasInclude($path, $alias = null)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        $instance->aliasInclude($path, $alias);
        }
                    /**
         * Register a handler for custom directives.
         *
         * @param string $name
         * @param callable $handler
         * @return void 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function directive($name, $handler)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        $instance->directive($name, $handler);
        }
                    /**
         * Get the list of custom directives.
         *
         * @return array 
         * @static 
         */ 
        public static function getCustomDirectives()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->getCustomDirectives();
        }
                    /**
         * Register a new precompiler.
         *
         * @param callable $precompiler
         * @return void 
         * @static 
         */ 
        public static function precompiler($precompiler)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        $instance->precompiler($precompiler);
        }
                    /**
         * Set the echo format to be used by the compiler.
         *
         * @param string $format
         * @return void 
         * @static 
         */ 
        public static function setEchoFormat($format)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        $instance->setEchoFormat($format);
        }
                    /**
         * Set the "echo" format to double encode entities.
         *
         * @return void 
         * @static 
         */ 
        public static function withDoubleEncoding()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        $instance->withDoubleEncoding();
        }
                    /**
         * Set the "echo" format to not double encode entities.
         *
         * @return void 
         * @static 
         */ 
        public static function withoutDoubleEncoding()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        $instance->withoutDoubleEncoding();
        }
                    /**
         * Indicate that component tags should not be compiled.
         *
         * @return void 
         * @static 
         */ 
        public static function withoutComponentTags()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        $instance->withoutComponentTags();
        }
                    /**
         * Get the path to the compiled version of a view.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function getCompiledPath($path)
        {            //Method inherited from \Illuminate\View\Compilers\Compiler         
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->getCompiledPath($path);
        }
                    /**
         * Determine if the view at the given path is expired.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isExpired($path)
        {            //Method inherited from \Illuminate\View\Compilers\Compiler         
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->isExpired($path);
        }
                    /**
         * Get a new component hash for a component name.
         *
         * @param string $component
         * @return string 
         * @static 
         */ 
        public static function newComponentHash($component)
        {
                        return \Illuminate\View\Compilers\BladeCompiler::newComponentHash($component);
        }
                    /**
         * Compile a class component opening.
         *
         * @param string $component
         * @param string $alias
         * @param string $data
         * @param string $hash
         * @return string 
         * @static 
         */ 
        public static function compileClassComponentOpening($component, $alias, $data, $hash)
        {
                        return \Illuminate\View\Compilers\BladeCompiler::compileClassComponentOpening($component, $alias, $data, $hash);
        }
                    /**
         * Compile the end-component statements into valid PHP.
         *
         * @return string 
         * @static 
         */ 
        public static function compileEndComponentClass()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->compileEndComponentClass();
        }
                    /**
         * Sanitize the given component attribute value.
         *
         * @param mixed $value
         * @return mixed 
         * @static 
         */ 
        public static function sanitizeComponentAttribute($value)
        {
                        return \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value);
        }
                    /**
         * Compile an end-once block into valid PHP.
         *
         * @return string 
         * @static 
         */ 
        public static function compileEndOnce()
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->compileEndOnce();
        }
                    /**
         * Compile Blade echos into valid PHP.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function compileEchos($value)
        {
                        /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
                        return $instance->compileEchos($value);
        }
         
    }
            /**
     * 
     *
     * @method static \Illuminate\Broadcasting\Broadcasters\Broadcaster channel(string $channel, callable|string  $callback, array $options = [])
     * @method static mixed auth(\Illuminate\Http\Request $request)
     * @see \Illuminate\Contracts\Broadcasting\Factory
     */ 
        class Broadcast {
                    /**
         * Register the routes for handling broadcast authentication and sockets.
         *
         * @param array|null $attributes
         * @return void 
         * @static 
         */ 
        public static function routes($attributes = null)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        $instance->routes($attributes);
        }
                    /**
         * Get the socket ID for the given request.
         *
         * @param \Illuminate\Http\Request|null $request
         * @return string|null 
         * @static 
         */ 
        public static function socket($request = null)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->socket($request);
        }
                    /**
         * Begin broadcasting an event.
         *
         * @param mixed|null $event
         * @return \Illuminate\Broadcasting\PendingBroadcast|void 
         * @static 
         */ 
        public static function event($event = null)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->event($event);
        }
                    /**
         * Queue the given event for broadcast.
         *
         * @param mixed $event
         * @return void 
         * @static 
         */ 
        public static function queue($event)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        $instance->queue($event);
        }
                    /**
         * Get a driver instance.
         *
         * @param string|null $driver
         * @return mixed 
         * @static 
         */ 
        public static function connection($driver = null)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->connection($driver);
        }
                    /**
         * Get a driver instance.
         *
         * @param string|null $name
         * @return mixed 
         * @static 
         */ 
        public static function driver($name = null)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->driver($name);
        }
                    /**
         * Get the default driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * Set the default driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        $instance->setDefaultDriver($name);
        }
                    /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Broadcasting\BroadcastManager 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
                        /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
                        return $instance->extend($driver, $callback);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Contracts\Bus\Dispatcher
     */ 
        class Bus {
                    /**
         * Dispatch a command to its appropriate handler.
         *
         * @param mixed $command
         * @return mixed 
         * @static 
         */ 
        public static function dispatch($command)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->dispatch($command);
        }
                    /**
         * Dispatch a command to its appropriate handler in the current process.
         *
         * @param mixed $command
         * @param mixed $handler
         * @return mixed 
         * @static 
         */ 
        public static function dispatchNow($command, $handler = null)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->dispatchNow($command, $handler);
        }
                    /**
         * Determine if the given command has a handler.
         *
         * @param mixed $command
         * @return bool 
         * @static 
         */ 
        public static function hasCommandHandler($command)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->hasCommandHandler($command);
        }
                    /**
         * Retrieve the handler for a command.
         *
         * @param mixed $command
         * @return bool|mixed 
         * @static 
         */ 
        public static function getCommandHandler($command)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->getCommandHandler($command);
        }
                    /**
         * Dispatch a command to its appropriate handler behind a queue.
         *
         * @param mixed $command
         * @return mixed 
         * @static 
         */ 
        public static function dispatchToQueue($command)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->dispatchToQueue($command);
        }
                    /**
         * Dispatch a command to its appropriate handler after the current process.
         *
         * @param mixed $command
         * @param mixed $handler
         * @return void 
         * @static 
         */ 
        public static function dispatchAfterResponse($command, $handler = null)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        $instance->dispatchAfterResponse($command, $handler);
        }
                    /**
         * Set the pipes through which commands should be piped before dispatching.
         *
         * @param array $pipes
         * @return \Illuminate\Bus\Dispatcher 
         * @static 
         */ 
        public static function pipeThrough($pipes)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->pipeThrough($pipes);
        }
                    /**
         * Map a command to a handler.
         *
         * @param array $map
         * @return \Illuminate\Bus\Dispatcher 
         * @static 
         */ 
        public static function map($map)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->map($map);
        }
                    /**
         * Assert if a job was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertDispatched($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        $instance->assertDispatched($command, $callback);
        }
                    /**
         * Assert if a job was pushed a number of times.
         *
         * @param string $command
         * @param int $times
         * @return void 
         * @static 
         */ 
        public static function assertDispatchedTimes($command, $times = 1)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        $instance->assertDispatchedTimes($command, $times);
        }
                    /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotDispatched($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        $instance->assertNotDispatched($command, $callback);
        }
                    /**
         * Assert if a job was dispatched after the response was sent based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertDispatchedAfterResponse($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        $instance->assertDispatchedAfterResponse($command, $callback);
        }
                    /**
         * Assert if a job was pushed after the response was sent a number of times.
         *
         * @param string $command
         * @param int $times
         * @return void 
         * @static 
         */ 
        public static function assertDispatchedAfterResponseTimes($command, $times = 1)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        $instance->assertDispatchedAfterResponseTimes($command, $times);
        }
                    /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotDispatchedAfterResponse($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        $instance->assertNotDispatchedAfterResponse($command, $callback);
        }
                    /**
         * Get all of the jobs matching a truth-test callback.
         *
         * @param string $command
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function dispatched($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->dispatched($command, $callback);
        }
                    /**
         * Get all of the jobs dispatched after the response was sent matching a truth-test callback.
         *
         * @param string $command
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function dispatchedAfterResponse($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->dispatchedAfterResponse($command, $callback);
        }
                    /**
         * Determine if there are any stored commands for a given class.
         *
         * @param string $command
         * @return bool 
         * @static 
         */ 
        public static function hasDispatched($command)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->hasDispatched($command);
        }
                    /**
         * Determine if there are any stored commands for a given class.
         *
         * @param string $command
         * @return bool 
         * @static 
         */ 
        public static function hasDispatchedAfterResponse($command)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->hasDispatchedAfterResponse($command);
        }
         
    }
            /**
     * 
     *
     * @method static \Illuminate\Contracts\Cache\Lock lock(string $name, int $seconds = 0, mixed $owner = null)
     * @method static \Illuminate\Contracts\Cache\Lock restoreLock(string $name, string $owner)
     * @see \Illuminate\Cache\CacheManager
     * @see \Illuminate\Cache\Repository
     */ 
        class Cache {
                    /**
         * Get a cache store instance by name, wrapped in a repository.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Cache\Repository 
         * @static 
         */ 
        public static function store($name = null)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->store($name);
        }
                    /**
         * Get a cache driver instance.
         *
         * @param string|null $driver
         * @return \Illuminate\Contracts\Cache\Repository 
         * @static 
         */ 
        public static function driver($driver = null)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->driver($driver);
        }
                    /**
         * Create a new cache repository with the given implementation.
         *
         * @param \Illuminate\Contracts\Cache\Store $store
         * @return \Illuminate\Cache\Repository 
         * @static 
         */ 
        public static function repository($store)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->repository($store);
        }
                    /**
         * Re-set the event dispatcher on all resolved cache repositories.
         *
         * @return void 
         * @static 
         */ 
        public static function refreshEventDispatcher()
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        $instance->refreshEventDispatcher();
        }
                    /**
         * Get the default cache driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * Set the default cache driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        $instance->setDefaultDriver($name);
        }
                    /**
         * Unset the given driver instances.
         *
         * @param array|string|null $name
         * @return \Illuminate\Cache\CacheManager 
         * @static 
         */ 
        public static function forgetDriver($name = null)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->forgetDriver($name);
        }
                    /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Cache\CacheManager 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * Determine if an item exists in the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->has($key);
        }
                    /**
         * Determine if an item doesn't exist in the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function missing($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->missing($key);
        }
                    /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->get($key, $default);
        }
                    /**
         * Retrieve multiple items from the cache by key.
         * 
         * Items not found in the cache will have a null value.
         *
         * @param array $keys
         * @return array 
         * @static 
         */ 
        public static function many($keys)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->many($keys);
        }
                    /**
         * Obtains multiple cache items by their unique keys.
         *
         * @param \Psr\SimpleCache\iterable $keys A list of keys that can obtained in a single operation.
         * @param mixed $default Default value to return for keys that do not exist.
         * @return \Psr\SimpleCache\iterable A list of key => value pairs. Cache keys that do not exist or are stale will have $default as value.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static 
         */ 
        public static function getMultiple($keys, $default = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->getMultiple($keys, $default);
        }
                    /**
         * Retrieve an item from the cache and delete it.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function pull($key, $default = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->pull($key, $default);
        }
                    /**
         * Store an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|int|null $ttl
         * @return bool 
         * @static 
         */ 
        public static function put($key, $value, $ttl = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->put($key, $value, $ttl);
        }
                    /**
         * Persists data in the cache, uniquely referenced by a key with an optional expiration TTL time.
         *
         * @param string $key The key of the item to store.
         * @param mixed $value The value of the item to store, must be serializable.
         * @param null|int|\DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                      the driver supports TTL then the library may set a default value
         *                                      for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static 
         */ 
        public static function set($key, $value, $ttl = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->set($key, $value, $ttl);
        }
                    /**
         * Store multiple items in the cache for a given number of seconds.
         *
         * @param array $values
         * @param \DateTimeInterface|\DateInterval|int|null $ttl
         * @return bool 
         * @static 
         */ 
        public static function putMany($values, $ttl = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->putMany($values, $ttl);
        }
                    /**
         * Persists a set of key => value pairs in the cache, with an optional TTL.
         *
         * @param \Psr\SimpleCache\iterable $values A list of key => value pairs for a multiple-set operation.
         * @param null|int|\DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                       the driver supports TTL then the library may set a default value
         *                                       for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $values is neither an array nor a Traversable,
         *   or if any of the $values are not a legal value.
         * @static 
         */ 
        public static function setMultiple($values, $ttl = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->setMultiple($values, $ttl);
        }
                    /**
         * Store an item in the cache if the key does not exist.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|int|null $ttl
         * @return bool 
         * @static 
         */ 
        public static function add($key, $value, $ttl = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->add($key, $value, $ttl);
        }
                    /**
         * Increment the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int|bool 
         * @static 
         */ 
        public static function increment($key, $value = 1)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->increment($key, $value);
        }
                    /**
         * Decrement the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int|bool 
         * @static 
         */ 
        public static function decrement($key, $value = 1)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->decrement($key, $value);
        }
                    /**
         * Store an item in the cache indefinitely.
         *
         * @param string $key
         * @param mixed $value
         * @return bool 
         * @static 
         */ 
        public static function forever($key, $value)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->forever($key, $value);
        }
                    /**
         * Get an item from the cache, or execute the given Closure and store the result.
         *
         * @param string $key
         * @param \DateTimeInterface|\DateInterval|int|null $ttl
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function remember($key, $ttl, $callback)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->remember($key, $ttl, $callback);
        }
                    /**
         * Get an item from the cache, or execute the given Closure and store the result forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function sear($key, $callback)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->sear($key, $callback);
        }
                    /**
         * Get an item from the cache, or execute the given Closure and store the result forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function rememberForever($key, $callback)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->rememberForever($key, $callback);
        }
                    /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function forget($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->forget($key);
        }
                    /**
         * Delete an item from the cache by its unique key.
         *
         * @param string $key The unique cache key of the item to delete.
         * @return bool True if the item was successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static 
         */ 
        public static function delete($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->delete($key);
        }
                    /**
         * Deletes multiple cache items in a single operation.
         *
         * @param \Psr\SimpleCache\iterable $keys A list of string-based keys to be deleted.
         * @return bool True if the items were successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static 
         */ 
        public static function deleteMultiple($keys)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->deleteMultiple($keys);
        }
                    /**
         * Wipes clean the entire cache's keys.
         *
         * @return bool True on success and false on failure.
         * @static 
         */ 
        public static function clear()
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->clear();
        }
                    /**
         * Begin executing a new tags operation if the store supports it.
         *
         * @param array|mixed $names
         * @return \Illuminate\Cache\TaggedCache 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function tags($names)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->tags($names);
        }
                    /**
         * Get the default cache time.
         *
         * @return int|null 
         * @static 
         */ 
        public static function getDefaultCacheTime()
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->getDefaultCacheTime();
        }
                    /**
         * Set the default cache time in seconds.
         *
         * @param int|null $seconds
         * @return \Illuminate\Cache\Repository 
         * @static 
         */ 
        public static function setDefaultCacheTime($seconds)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->setDefaultCacheTime($seconds);
        }
                    /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Contracts\Cache\Store 
         * @static 
         */ 
        public static function getStore()
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->getStore();
        }
                    /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getEventDispatcher()
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->getEventDispatcher();
        }
                    /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setEventDispatcher($events)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        $instance->setEventDispatcher($events);
        }
                    /**
         * Determine if a cached value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->offsetExists($key);
        }
                    /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->offsetGet($key);
        }
                    /**
         * Store an item in the cache for the default time.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        $instance->offsetSet($key, $value);
        }
                    /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        $instance->offsetUnset($key);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        \Illuminate\Cache\Repository::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        \Illuminate\Cache\Repository::mixin($mixin, $replace);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Cache\Repository::hasMacro($name);
        }
                    /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->macroCall($method, $parameters);
        }
                    /**
         * Remove all items from the cache.
         *
         * @return bool 
         * @static 
         */ 
        public static function flush()
        {
                        /** @var \Illuminate\Cache\FileStore $instance */
                        return $instance->flush();
        }
                    /**
         * Get the Filesystem instance.
         *
         * @return \Illuminate\Filesystem\Filesystem 
         * @static 
         */ 
        public static function getFilesystem()
        {
                        /** @var \Illuminate\Cache\FileStore $instance */
                        return $instance->getFilesystem();
        }
                    /**
         * Get the working directory of the cache.
         *
         * @return string 
         * @static 
         */ 
        public static function getDirectory()
        {
                        /** @var \Illuminate\Cache\FileStore $instance */
                        return $instance->getDirectory();
        }
                    /**
         * Get the cache key prefix.
         *
         * @return string 
         * @static 
         */ 
        public static function getPrefix()
        {
                        /** @var \Illuminate\Cache\FileStore $instance */
                        return $instance->getPrefix();
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Config\Repository
     */ 
        class Config {
                    /**
         * Determine if the given configuration value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->has($key);
        }
                    /**
         * Get the specified configuration value.
         *
         * @param array|string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->get($key, $default);
        }
                    /**
         * Get many configuration values.
         *
         * @param array $keys
         * @return array 
         * @static 
         */ 
        public static function getMany($keys)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->getMany($keys);
        }
                    /**
         * Set a given configuration value.
         *
         * @param array|string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function set($key, $value = null)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        $instance->set($key, $value);
        }
                    /**
         * Prepend a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function prepend($key, $value)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        $instance->prepend($key, $value);
        }
                    /**
         * Push a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function push($key, $value)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        $instance->push($key, $value);
        }
                    /**
         * Get all of the configuration items for the application.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->all();
        }
                    /**
         * Determine if the given configuration option exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->offsetExists($key);
        }
                    /**
         * Get a configuration option.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->offsetGet($key);
        }
                    /**
         * Set a configuration option.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        $instance->offsetSet($key, $value);
        }
                    /**
         * Unset a configuration option.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        $instance->offsetUnset($key);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Cookie\CookieJar
     */ 
        class Cookie {
                    /**
         * Create a new cookie instance.
         *
         * @param string $name
         * @param string $value
         * @param int $minutes
         * @param string|null $path
         * @param string|null $domain
         * @param bool|null $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->make($name, $value, $minutes, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }
                    /**
         * Create a cookie that lasts "forever" (five years).
         *
         * @param string $name
         * @param string $value
         * @param string|null $path
         * @param string|null $domain
         * @param bool|null $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function forever($name, $value, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->forever($name, $value, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }
                    /**
         * Expire the given cookie.
         *
         * @param string $name
         * @param string|null $path
         * @param string|null $domain
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function forget($name, $path = null, $domain = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->forget($name, $path, $domain);
        }
                    /**
         * Determine if a cookie has been queued.
         *
         * @param string $key
         * @param string|null $path
         * @return bool 
         * @static 
         */ 
        public static function hasQueued($key, $path = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->hasQueued($key, $path);
        }
                    /**
         * Get a queued cookie instance.
         *
         * @param string $key
         * @param mixed $default
         * @param string|null $path
         * @return \Symfony\Component\HttpFoundation\Cookie|null 
         * @static 
         */ 
        public static function queued($key, $default = null, $path = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->queued($key, $default, $path);
        }
                    /**
         * Queue a cookie to send with the next response.
         *
         * @param array $parameters
         * @return void 
         * @static 
         */ 
        public static function queue(...$parameters)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        $instance->queue(...$parameters);
        }
                    /**
         * Remove a cookie from the queue.
         *
         * @param string $name
         * @param string|null $path
         * @return void 
         * @static 
         */ 
        public static function unqueue($name, $path = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        $instance->unqueue($name, $path);
        }
                    /**
         * Set the default path and domain for the jar.
         *
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param string|null $sameSite
         * @return \Illuminate\Cookie\CookieJar 
         * @static 
         */ 
        public static function setDefaultPathAndDomain($path, $domain, $secure = false, $sameSite = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->setDefaultPathAndDomain($path, $domain, $secure, $sameSite);
        }
                    /**
         * Get the cookies which have been queued for the next request.
         *
         * @return \Symfony\Component\HttpFoundation\Cookie[] 
         * @static 
         */ 
        public static function getQueuedCookies()
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->getQueuedCookies();
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        \Illuminate\Cookie\CookieJar::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        \Illuminate\Cookie\CookieJar::mixin($mixin, $replace);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Cookie\CookieJar::hasMacro($name);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Encryption\Encrypter
     */ 
        class Crypt {
                    /**
         * Determine if the given key and cipher combination is valid.
         *
         * @param string $key
         * @param string $cipher
         * @return bool 
         * @static 
         */ 
        public static function supported($key, $cipher)
        {
                        return \Illuminate\Encryption\Encrypter::supported($key, $cipher);
        }
                    /**
         * Create a new encryption key for the given cipher.
         *
         * @param string $cipher
         * @return string 
         * @static 
         */ 
        public static function generateKey($cipher)
        {
                        return \Illuminate\Encryption\Encrypter::generateKey($cipher);
        }
                    /**
         * Encrypt the given value.
         *
         * @param mixed $value
         * @param bool $serialize
         * @return string 
         * @throws \Illuminate\Contracts\Encryption\EncryptException
         * @static 
         */ 
        public static function encrypt($value, $serialize = true)
        {
                        /** @var \Illuminate\Encryption\Encrypter $instance */
                        return $instance->encrypt($value, $serialize);
        }
                    /**
         * Encrypt a string without serialization.
         *
         * @param string $value
         * @return string 
         * @throws \Illuminate\Contracts\Encryption\EncryptException
         * @static 
         */ 
        public static function encryptString($value)
        {
                        /** @var \Illuminate\Encryption\Encrypter $instance */
                        return $instance->encryptString($value);
        }
                    /**
         * Decrypt the given value.
         *
         * @param string $payload
         * @param bool $unserialize
         * @return mixed 
         * @throws \Illuminate\Contracts\Encryption\DecryptException
         * @static 
         */ 
        public static function decrypt($payload, $unserialize = true)
        {
                        /** @var \Illuminate\Encryption\Encrypter $instance */
                        return $instance->decrypt($payload, $unserialize);
        }
                    /**
         * Decrypt the given string without unserialization.
         *
         * @param string $payload
         * @return string 
         * @throws \Illuminate\Contracts\Encryption\DecryptException
         * @static 
         */ 
        public static function decryptString($payload)
        {
                        /** @var \Illuminate\Encryption\Encrypter $instance */
                        return $instance->decryptString($payload);
        }
                    /**
         * Get the encryption key.
         *
         * @return string 
         * @static 
         */ 
        public static function getKey()
        {
                        /** @var \Illuminate\Encryption\Encrypter $instance */
                        return $instance->getKey();
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Database\DatabaseManager
     * @see \Illuminate\Database\Connection
     */ 
        class DB {
                    /**
         * Get a database connection instance.
         *
         * @param string|null $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function connection($name = null)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->connection($name);
        }
                    /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function purge($name = null)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        $instance->purge($name);
        }
                    /**
         * Disconnect from the given database.
         *
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function disconnect($name = null)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        $instance->disconnect($name);
        }
                    /**
         * Reconnect to the given database.
         *
         * @param string|null $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function reconnect($name = null)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->reconnect($name);
        }
                    /**
         * Set the default database connection for the callback execution.
         *
         * @param string $name
         * @param callable $callback
         * @return mixed 
         * @static 
         */ 
        public static function usingConnection($name, $callback)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->usingConnection($name, $callback);
        }
                    /**
         * Get the default connection name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultConnection()
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->getDefaultConnection();
        }
                    /**
         * Set the default connection name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultConnection($name)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        $instance->setDefaultConnection($name);
        }
                    /**
         * Get all of the support drivers.
         *
         * @return array 
         * @static 
         */ 
        public static function supportedDrivers()
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->supportedDrivers();
        }
                    /**
         * Get all of the drivers that are actually available.
         *
         * @return array 
         * @static 
         */ 
        public static function availableDrivers()
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->availableDrivers();
        }
                    /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void 
         * @static 
         */ 
        public static function extend($name, $resolver)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        $instance->extend($name, $resolver);
        }
                    /**
         * Return all of the created connections.
         *
         * @return array 
         * @static 
         */ 
        public static function getConnections()
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->getConnections();
        }
                    /**
         * Set the database reconnector callback.
         *
         * @param callable $reconnector
         * @return void 
         * @static 
         */ 
        public static function setReconnector($reconnector)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        $instance->setReconnector($reconnector);
        }
                    /**
         * Get a schema builder instance for the connection.
         *
         * @return \Illuminate\Database\Schema\MySqlBuilder 
         * @static 
         */ 
        public static function getSchemaBuilder()
        {
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getSchemaBuilder();
        }
                    /**
         * Set the query grammar to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultQueryGrammar()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        $instance->useDefaultQueryGrammar();
        }
                    /**
         * Set the schema grammar to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultSchemaGrammar()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        $instance->useDefaultSchemaGrammar();
        }
                    /**
         * Set the query post processor to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultPostProcessor()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        $instance->useDefaultPostProcessor();
        }
                    /**
         * Begin a fluent query against a database table.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|string $table
         * @param string|null $as
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */ 
        public static function table($table, $as = null)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->table($table, $as);
        }
                    /**
         * Get a new query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */ 
        public static function query()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->query();
        }
                    /**
         * Run a select statement and return a single result.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return mixed 
         * @static 
         */ 
        public static function selectOne($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->selectOne($query, $bindings, $useReadPdo);
        }
                    /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return array 
         * @static 
         */ 
        public static function selectFromWriteConnection($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->selectFromWriteConnection($query, $bindings);
        }
                    /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return array 
         * @static 
         */ 
        public static function select($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->select($query, $bindings, $useReadPdo);
        }
                    /**
         * Run a select statement against the database and returns a generator.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return \Generator 
         * @static 
         */ 
        public static function cursor($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->cursor($query, $bindings, $useReadPdo);
        }
                    /**
         * Run an insert statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return bool 
         * @static 
         */ 
        public static function insert($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->insert($query, $bindings);
        }
                    /**
         * Run an update statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function update($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->update($query, $bindings);
        }
                    /**
         * Run a delete statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function delete($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->delete($query, $bindings);
        }
                    /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param string $query
         * @param array $bindings
         * @return bool 
         * @static 
         */ 
        public static function statement($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->statement($query, $bindings);
        }
                    /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function affectingStatement($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->affectingStatement($query, $bindings);
        }
                    /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param string $query
         * @return bool 
         * @static 
         */ 
        public static function unprepared($query)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->unprepared($query);
        }
                    /**
         * Execute the given callback in "dry run" mode.
         *
         * @param \Closure $callback
         * @return array 
         * @static 
         */ 
        public static function pretend($callback)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->pretend($callback);
        }
                    /**
         * Bind values to their parameters in the given statement.
         *
         * @param \PDOStatement $statement
         * @param array $bindings
         * @return void 
         * @static 
         */ 
        public static function bindValues($statement, $bindings)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        $instance->bindValues($statement, $bindings);
        }
                    /**
         * Prepare the query bindings for execution.
         *
         * @param array $bindings
         * @return array 
         * @static 
         */ 
        public static function prepareBindings($bindings)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->prepareBindings($bindings);
        }
                    /**
         * Log a query in the connection's query log.
         *
         * @param string $query
         * @param array $bindings
         * @param float|null $time
         * @return void 
         * @static 
         */ 
        public static function logQuery($query, $bindings, $time = null)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        $instance->logQuery($query, $bindings, $time);
        }
                    /**
         * Register a database query listener with the connection.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function listen($callback)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        $instance->listen($callback);
        }
                    /**
         * Get a new raw query expression.
         *
         * @param mixed $value
         * @return \Illuminate\Database\Query\Expression 
         * @static 
         */ 
        public static function raw($value)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->raw($value);
        }
                    /**
         * Indicate if any records have been modified.
         *
         * @param bool $value
         * @return void 
         * @static 
         */ 
        public static function recordsHaveBeenModified($value = true)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        $instance->recordsHaveBeenModified($value);
        }
                    /**
         * Is Doctrine available?
         *
         * @return bool 
         * @static 
         */ 
        public static function isDoctrineAvailable()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->isDoctrineAvailable();
        }
                    /**
         * Get a Doctrine Schema Column instance.
         *
         * @param string $table
         * @param string $column
         * @return \Doctrine\DBAL\Schema\Column 
         * @static 
         */ 
        public static function getDoctrineColumn($table, $column)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getDoctrineColumn($table, $column);
        }
                    /**
         * Get the Doctrine DBAL schema manager for the connection.
         *
         * @return \Doctrine\DBAL\Schema\AbstractSchemaManager 
         * @static 
         */ 
        public static function getDoctrineSchemaManager()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getDoctrineSchemaManager();
        }
                    /**
         * Get the Doctrine DBAL database connection instance.
         *
         * @return \Doctrine\DBAL\Connection 
         * @static 
         */ 
        public static function getDoctrineConnection()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getDoctrineConnection();
        }
                    /**
         * Get the current PDO connection.
         *
         * @return \PDO 
         * @static 
         */ 
        public static function getPdo()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getPdo();
        }
                    /**
         * Get the current PDO connection parameter without executing any reconnect logic.
         *
         * @return \PDO|\Closure|null 
         * @static 
         */ 
        public static function getRawPdo()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getRawPdo();
        }
                    /**
         * Get the current PDO connection used for reading.
         *
         * @return \PDO 
         * @static 
         */ 
        public static function getReadPdo()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getReadPdo();
        }
                    /**
         * Get the current read PDO connection parameter without executing any reconnect logic.
         *
         * @return \PDO|\Closure|null 
         * @static 
         */ 
        public static function getRawReadPdo()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getRawReadPdo();
        }
                    /**
         * Set the PDO connection.
         *
         * @param \PDO|\Closure|null $pdo
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setPdo($pdo)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->setPdo($pdo);
        }
                    /**
         * Set the PDO connection used for reading.
         *
         * @param \PDO|\Closure|null $pdo
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setReadPdo($pdo)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->setReadPdo($pdo);
        }
                    /**
         * Get the database connection name.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getName()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getName();
        }
                    /**
         * Get an option from the configuration options.
         *
         * @param string|null $option
         * @return mixed 
         * @static 
         */ 
        public static function getConfig($option = null)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getConfig($option);
        }
                    /**
         * Get the PDO driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDriverName()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getDriverName();
        }
                    /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar 
         * @static 
         */ 
        public static function getQueryGrammar()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getQueryGrammar();
        }
                    /**
         * Set the query grammar used by the connection.
         *
         * @param \Illuminate\Database\Query\Grammars\Grammar $grammar
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setQueryGrammar($grammar)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->setQueryGrammar($grammar);
        }
                    /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Schema\Grammars\Grammar 
         * @static 
         */ 
        public static function getSchemaGrammar()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getSchemaGrammar();
        }
                    /**
         * Set the schema grammar used by the connection.
         *
         * @param \Illuminate\Database\Schema\Grammars\Grammar $grammar
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setSchemaGrammar($grammar)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->setSchemaGrammar($grammar);
        }
                    /**
         * Get the query post processor used by the connection.
         *
         * @return \Illuminate\Database\Query\Processors\Processor 
         * @static 
         */ 
        public static function getPostProcessor()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getPostProcessor();
        }
                    /**
         * Set the query post processor used by the connection.
         *
         * @param \Illuminate\Database\Query\Processors\Processor $processor
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setPostProcessor($processor)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->setPostProcessor($processor);
        }
                    /**
         * Get the event dispatcher used by the connection.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getEventDispatcher()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getEventDispatcher();
        }
                    /**
         * Set the event dispatcher instance on the connection.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setEventDispatcher($events)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->setEventDispatcher($events);
        }
                    /**
         * Unset the event dispatcher for this connection.
         *
         * @return void 
         * @static 
         */ 
        public static function unsetEventDispatcher()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        $instance->unsetEventDispatcher();
        }
                    /**
         * Determine if the connection is in a "dry run".
         *
         * @return bool 
         * @static 
         */ 
        public static function pretending()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->pretending();
        }
                    /**
         * Get the connection query log.
         *
         * @return array 
         * @static 
         */ 
        public static function getQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getQueryLog();
        }
                    /**
         * Clear the query log.
         *
         * @return void 
         * @static 
         */ 
        public static function flushQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        $instance->flushQueryLog();
        }
                    /**
         * Enable the query log on the connection.
         *
         * @return void 
         * @static 
         */ 
        public static function enableQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        $instance->enableQueryLog();
        }
                    /**
         * Disable the query log on the connection.
         *
         * @return void 
         * @static 
         */ 
        public static function disableQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        $instance->disableQueryLog();
        }
                    /**
         * Determine whether we're logging queries.
         *
         * @return bool 
         * @static 
         */ 
        public static function logging()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->logging();
        }
                    /**
         * Get the name of the connected database.
         *
         * @return string 
         * @static 
         */ 
        public static function getDatabaseName()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getDatabaseName();
        }
                    /**
         * Set the name of the connected database.
         *
         * @param string $database
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setDatabaseName($database)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->setDatabaseName($database);
        }
                    /**
         * Get the table prefix for the connection.
         *
         * @return string 
         * @static 
         */ 
        public static function getTablePrefix()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->getTablePrefix();
        }
                    /**
         * Set the table prefix in use by the connection.
         *
         * @param string $prefix
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setTablePrefix($prefix)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->setTablePrefix($prefix);
        }
                    /**
         * Set the table prefix and return the grammar.
         *
         * @param \Illuminate\Database\Grammar $grammar
         * @return \Illuminate\Database\Grammar 
         * @static 
         */ 
        public static function withTablePrefix($grammar)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->withTablePrefix($grammar);
        }
                    /**
         * Register a connection resolver.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function resolverFor($driver, $callback)
        {            //Method inherited from \Illuminate\Database\Connection         
                        \Illuminate\Database\MySqlConnection::resolverFor($driver, $callback);
        }
                    /**
         * Get the connection resolver for the given driver.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */ 
        public static function getResolver($driver)
        {            //Method inherited from \Illuminate\Database\Connection         
                        return \Illuminate\Database\MySqlConnection::getResolver($driver);
        }
                    /**
         * Execute a Closure within a transaction.
         *
         * @param \Closure $callback
         * @param int $attempts
         * @return mixed 
         * @throws \Throwable
         * @static 
         */ 
        public static function transaction($callback, $attempts = 1)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->transaction($callback, $attempts);
        }
                    /**
         * Start a new database transaction.
         *
         * @return void 
         * @throws \Throwable
         * @static 
         */ 
        public static function beginTransaction()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        $instance->beginTransaction();
        }
                    /**
         * Commit the active database transaction.
         *
         * @return void 
         * @throws \Throwable
         * @static 
         */ 
        public static function commit()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        $instance->commit();
        }
                    /**
         * Rollback the active database transaction.
         *
         * @param int|null $toLevel
         * @return void 
         * @throws \Throwable
         * @static 
         */ 
        public static function rollBack($toLevel = null)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        $instance->rollBack($toLevel);
        }
                    /**
         * Get the number of active transactions.
         *
         * @return int 
         * @static 
         */ 
        public static function transactionLevel()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \Illuminate\Database\MySqlConnection $instance */
                        return $instance->transactionLevel();
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Events\Dispatcher
     */ 
        class Event {
                    /**
         * Register an event listener with the dispatcher.
         *
         * @param string|array $events
         * @param \Closure|string $listener
         * @return void 
         * @static 
         */ 
        public static function listen($events, $listener)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        $instance->listen($events, $listener);
        }
                    /**
         * Determine if a given event has listeners.
         *
         * @param string $eventName
         * @return bool 
         * @static 
         */ 
        public static function hasListeners($eventName)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->hasListeners($eventName);
        }
                    /**
         * Determine if the given event has any wildcard listeners.
         *
         * @param string $eventName
         * @return bool 
         * @static 
         */ 
        public static function hasWildcardListeners($eventName)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->hasWildcardListeners($eventName);
        }
                    /**
         * Register an event and payload to be fired later.
         *
         * @param string $event
         * @param array $payload
         * @return void 
         * @static 
         */ 
        public static function push($event, $payload = [])
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        $instance->push($event, $payload);
        }
                    /**
         * Flush a set of pushed events.
         *
         * @param string $event
         * @return void 
         * @static 
         */ 
        public static function flush($event)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        $instance->flush($event);
        }
                    /**
         * Register an event subscriber with the dispatcher.
         *
         * @param object|string $subscriber
         * @return void 
         * @static 
         */ 
        public static function subscribe($subscriber)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        $instance->subscribe($subscriber);
        }
                    /**
         * Fire an event until the first non-null response is returned.
         *
         * @param string|object $event
         * @param mixed $payload
         * @return array|null 
         * @static 
         */ 
        public static function until($event, $payload = [])
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->until($event, $payload);
        }
                    /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         * @return array|null 
         * @static 
         */ 
        public static function dispatch($event, $payload = [], $halt = false)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->dispatch($event, $payload, $halt);
        }
                    /**
         * Get all of the listeners for a given event name.
         *
         * @param string $eventName
         * @return array 
         * @static 
         */ 
        public static function getListeners($eventName)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->getListeners($eventName);
        }
                    /**
         * Register an event listener with the dispatcher.
         *
         * @param \Closure|string $listener
         * @param bool $wildcard
         * @return \Closure 
         * @static 
         */ 
        public static function makeListener($listener, $wildcard = false)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->makeListener($listener, $wildcard);
        }
                    /**
         * Create a class based listener using the IoC container.
         *
         * @param string $listener
         * @param bool $wildcard
         * @return \Closure 
         * @static 
         */ 
        public static function createClassListener($listener, $wildcard = false)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->createClassListener($listener, $wildcard);
        }
                    /**
         * Remove a set of listeners from the dispatcher.
         *
         * @param string $event
         * @return void 
         * @static 
         */ 
        public static function forget($event)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        $instance->forget($event);
        }
                    /**
         * Forget all of the pushed listeners.
         *
         * @return void 
         * @static 
         */ 
        public static function forgetPushed()
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        $instance->forgetPushed();
        }
                    /**
         * Set the queue resolver implementation.
         *
         * @param callable $resolver
         * @return \Illuminate\Events\Dispatcher 
         * @static 
         */ 
        public static function setQueueResolver($resolver)
        {
                        /** @var \Illuminate\Events\Dispatcher $instance */
                        return $instance->setQueueResolver($resolver);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        \Illuminate\Events\Dispatcher::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        \Illuminate\Events\Dispatcher::mixin($mixin, $replace);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Events\Dispatcher::hasMacro($name);
        }
                    /**
         * Assert if an event was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $event
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertDispatched($event, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        $instance->assertDispatched($event, $callback);
        }
                    /**
         * Assert if an event was dispatched a number of times.
         *
         * @param string $event
         * @param int $times
         * @return void 
         * @static 
         */ 
        public static function assertDispatchedTimes($event, $times = 1)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        $instance->assertDispatchedTimes($event, $times);
        }
                    /**
         * Determine if an event was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $event
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotDispatched($event, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        $instance->assertNotDispatched($event, $callback);
        }
                    /**
         * Get all of the events matching a truth-test callback.
         *
         * @param string $event
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function dispatched($event, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        return $instance->dispatched($event, $callback);
        }
                    /**
         * Determine if the given event has been dispatched.
         *
         * @param string $event
         * @return bool 
         * @static 
         */ 
        public static function hasDispatched($event)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        return $instance->hasDispatched($event);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Filesystem\Filesystem
     */ 
        class File {
                    /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function exists($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->exists($path);
        }
                    /**
         * Determine if a file or directory is missing.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function missing($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->missing($path);
        }
                    /**
         * Get the contents of a file.
         *
         * @param string $path
         * @param bool $lock
         * @return string 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function get($path, $lock = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->get($path, $lock);
        }
                    /**
         * Get contents of a file with shared access.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function sharedGet($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->sharedGet($path);
        }
                    /**
         * Get the returned value of a file.
         *
         * @param string $path
         * @return mixed 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function getRequire($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->getRequire($path);
        }
                    /**
         * Require the given file once.
         *
         * @param string $file
         * @return mixed 
         * @static 
         */ 
        public static function requireOnce($file)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->requireOnce($file);
        }
                    /**
         * Get the MD5 hash of the file at the given path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function hash($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->hash($path);
        }
                    /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string $contents
         * @param bool $lock
         * @return int|bool 
         * @static 
         */ 
        public static function put($path, $contents, $lock = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->put($path, $contents, $lock);
        }
                    /**
         * Write the contents of a file, replacing it atomically if it already exists.
         *
         * @param string $path
         * @param string $content
         * @return void 
         * @static 
         */ 
        public static function replace($path, $content)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        $instance->replace($path, $content);
        }
                    /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @return int 
         * @static 
         */ 
        public static function prepend($path, $data)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->prepend($path, $data);
        }
                    /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @return int 
         * @static 
         */ 
        public static function append($path, $data)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->append($path, $data);
        }
                    /**
         * Get or set UNIX mode of a file or directory.
         *
         * @param string $path
         * @param int|null $mode
         * @return mixed 
         * @static 
         */ 
        public static function chmod($path, $mode = null)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->chmod($path, $mode);
        }
                    /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool 
         * @static 
         */ 
        public static function delete($paths)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->delete($paths);
        }
                    /**
         * Move a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool 
         * @static 
         */ 
        public static function move($path, $target)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->move($path, $target);
        }
                    /**
         * Copy a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool 
         * @static 
         */ 
        public static function copy($path, $target)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->copy($path, $target);
        }
                    /**
         * Create a symlink to the target file or directory. On Windows, a hard link is created if the target is a file.
         *
         * @param string $target
         * @param string $link
         * @return void 
         * @static 
         */ 
        public static function link($target, $link)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        $instance->link($target, $link);
        }
                    /**
         * Extract the file name from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function name($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->name($path);
        }
                    /**
         * Extract the trailing name component from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function basename($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->basename($path);
        }
                    /**
         * Extract the parent directory from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function dirname($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->dirname($path);
        }
                    /**
         * Extract the file extension from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function extension($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->extension($path);
        }
                    /**
         * Guess the file extension from the mime-type of a given file.
         *
         * @param string $path
         * @return string|null 
         * @static 
         */ 
        public static function guessExtension($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->guessExtension($path);
        }
                    /**
         * Get the file type of a given file.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function type($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->type($path);
        }
                    /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false 
         * @static 
         */ 
        public static function mimeType($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->mimeType($path);
        }
                    /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function size($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->size($path);
        }
                    /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function lastModified($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->lastModified($path);
        }
                    /**
         * Determine if the given path is a directory.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function isDirectory($directory)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->isDirectory($directory);
        }
                    /**
         * Determine if the given path is readable.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isReadable($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->isReadable($path);
        }
                    /**
         * Determine if the given path is writable.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isWritable($path)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->isWritable($path);
        }
                    /**
         * Determine if the given path is a file.
         *
         * @param string $file
         * @return bool 
         * @static 
         */ 
        public static function isFile($file)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->isFile($file);
        }
                    /**
         * Find path names matching a given pattern.
         *
         * @param string $pattern
         * @param int $flags
         * @return array 
         * @static 
         */ 
        public static function glob($pattern, $flags = 0)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->glob($pattern, $flags);
        }
                    /**
         * Get an array of all files in a directory.
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[] 
         * @static 
         */ 
        public static function files($directory, $hidden = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->files($directory, $hidden);
        }
                    /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[] 
         * @static 
         */ 
        public static function allFiles($directory, $hidden = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->allFiles($directory, $hidden);
        }
                    /**
         * Get all of the directories within a given directory.
         *
         * @param string $directory
         * @return array 
         * @static 
         */ 
        public static function directories($directory)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->directories($directory);
        }
                    /**
         * Ensure a directory exists.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @return void 
         * @static 
         */ 
        public static function ensureDirectoryExists($path, $mode = 493, $recursive = true)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        $instance->ensureDirectoryExists($path, $mode, $recursive);
        }
                    /**
         * Create a directory.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @param bool $force
         * @return bool 
         * @static 
         */ 
        public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->makeDirectory($path, $mode, $recursive, $force);
        }
                    /**
         * Move a directory.
         *
         * @param string $from
         * @param string $to
         * @param bool $overwrite
         * @return bool 
         * @static 
         */ 
        public static function moveDirectory($from, $to, $overwrite = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->moveDirectory($from, $to, $overwrite);
        }
                    /**
         * Copy a directory from one location to another.
         *
         * @param string $directory
         * @param string $destination
         * @param int|null $options
         * @return bool 
         * @static 
         */ 
        public static function copyDirectory($directory, $destination, $options = null)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->copyDirectory($directory, $destination, $options);
        }
                    /**
         * Recursively delete a directory.
         * 
         * The directory itself may be optionally preserved.
         *
         * @param string $directory
         * @param bool $preserve
         * @return bool 
         * @static 
         */ 
        public static function deleteDirectory($directory, $preserve = false)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->deleteDirectory($directory, $preserve);
        }
                    /**
         * Remove all of the directories within a given directory.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function deleteDirectories($directory)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->deleteDirectories($directory);
        }
                    /**
         * Empty the specified directory of all files and folders.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function cleanDirectory($directory)
        {
                        /** @var \Illuminate\Filesystem\Filesystem $instance */
                        return $instance->cleanDirectory($directory);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
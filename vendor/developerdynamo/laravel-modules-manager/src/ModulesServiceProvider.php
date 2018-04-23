<?php

namespace DeveloperDynamo\Modular;

use DeveloperDynamo\Modular\Console\CreateControllerCmd;
use DeveloperDynamo\Modular\Console\CreateModelCmd;
use DeveloperDynamo\Modular\Console\CreatePolicyCmd;
use DeveloperDynamo\Modular\Console\CreateRequestCmd;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;

class ModulesServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot() {
		
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		$this->registerMakeCommand ();

        //Single commands available
        $this->commands([
            CreateControllerCmd::class,
            CreateModelCmd::class,
            CreateRequestCmd::class,
            CreatePolicyCmd::class,
        ]);
	}

	/**
	 * Register the "make:module" console command.
	 *
	 * @return Console\MakeModuleCommand
	 */
	protected function registerMakeCommand() {
		$this->commands ( 'modules.make' );

		$bind_method = method_exists ( $this->app, 'bindShared' ) ? 'bindShared' : 'singleton';

		$this->app->{$bind_method} ( 'modules.make', function ($app) {
            return new Console\MakeModuleCommand ( new Filesystem() );
		} );
	}
}

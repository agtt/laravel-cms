<?php

namespace DeveloperDynamo\Modular\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class MakeModuleCommand extends Command
{
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'make:module';
    
    protected $filesystem;

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create a new module (folder structure)';

    public function __construct(Filesystem $filesystem)
    {
        parent::__construct();
        
        $this->filesystem = $filesystem;
    }

    /**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		// check if module exists
		if(is_dir(app_path().'/Modules/'.$this->getModuleName()))
			return $this->error('Module '.$this->getModuleName().' already exists!');
        else
            $this->filesystem->makeDirectory(app_path().'/Modules/'.$this->getModuleName(), 0777, true, true);

		// Generate structure
		$this->genRoutes();
		$this->genViews();
		$this->genProviders();
		$this->genTranslations();

        //Using existent artisan commands
        $this->genControllers();
        $this->genModels();
        $this->genPolicy();
        $this->genRequests();

		$this->info('Module created successfully.');
		$this->info('Now you need to add '.$this->getModuleName()."ServiceProvider in your config/app.php");
	}

	public function genRoutes()
	{
		$path = app_path()."/Modules/".$this->getModuleName();

		$stub = str_replace('{{MODULE_NAME}}', $this->getModuleName(), file_get_contents(__DIR__.'/stubs/routes.stub'));

        //$this->line($stub);

		//build and put example file into directory
		$this->filesystem->put(str_replace('\\', '/', $path."/routes.php"), $stub);
	}

    public function genViews()
    {
        $path = app_path()."/Modules/".$this->getModuleName()."/Views";

        if(! $this->filesystem->isDirectory($path))
            $this->filesystem->makeDirectory($path);

        $stub = str_replace('{{MODULE_NAME}}', $this->getModuleName(), file_get_contents(__DIR__.'/stubs/view.stub'));

        //build and put example file into directory
        $this->filesystem->put($path."/index.blade.php", $stub);
    }

    public function genProviders()
    {
        $path = app_path()."/Modules/".$this->getModuleName()."/Providers";

        if(! $this->filesystem->isDirectory($path))
            $this->filesystem->makeDirectory($path);

        $stub = str_replace('{{MODULE_NAME}}', $this->getModuleName(), file_get_contents(__DIR__.'/stubs/provider.stub'));

        //build and put example file into directory
        $this->filesystem->put($path."/".$this->getModuleName()."ServiceProvider.php", $stub);
    }

    public function genTranslations()
    {
        $path = app_path()."/Modules/".$this->getModuleName()."/lang/en";

        if(! $this->filesystem->isDirectory($path))
            $this->filesystem->makeDirectory($path, 0777, true, true);

        //build and put example file into directory
        $this->filesystem->put($path."/example.php", file_get_contents(__DIR__."/stubs/translation.stub"));
    }

	public function genControllers()
	{
        \Artisan::call('module:controller', [
            'path' => $this->getModuleName().'@ExampleController',
        ]);
	}

    public function genModels()
    {
        \Artisan::call('module:model', [
            'path' => $this->getModuleName().'@Example',
        ]);
    }

    public function genPolicy()
    {
        \Artisan::call('module:policy', [
            'path' => $this->getModuleName().'@ExamplePolicy',
        ]);
    }

	public function genRequests()
    {
        \Artisan::call('module:request', [
            'path' => $this->getModuleName().'@ExampleRequest',
        ]);
    }

	/**
	 * Get value of name input argument
	 *
	 * @return array|string
	 */
	public function getModuleName()
	{
		return ucfirst($this->argument('name'));
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
			['name', InputArgument::REQUIRED, 'Module name.'],
		];
	}
}

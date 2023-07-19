<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;

class GenerateMigrationsFromJson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrations:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generating migrations from JSON files';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * Cuando cree los archivos de migrations tuve incovenientes al momento de ejecutar este comando
     * ya que algunos archivos me mostraban que habian errores cuando los abri en vsc, el ROUTE_JSON_FILES
     * es donde tengo mi ruta completa de la carpeta de todos los archivos json
     *
     * @return int
     */
    public function handle()
    {
        $folder_path = env('ROUTE_JSON_FILES');
        $json_files = File::files($folder_path);

        $tables = array_map(fn ($file) => pathinfo($file, PATHINFO_FILENAME), $json_files);

        // cambiando el orden del array de las tablas para que no
        // haya errores al momento de ejecutar las migraciones
        array_reverse($tables);
        $element_to_move = ['reservations', 'user_plans'];
        $new_position = 7;

        foreach ($element_to_move as $el) {
            $current_idx = array_search($el, $tables);
            if ($current_idx !== false) {
                array_splice($tables, $current_idx, 1);

                array_splice($tables, $new_position, 0, $el);
            }
        }

        foreach ($tables as $table_name) {
            if ($table_name === 'users') continue;

            $migration_name = 'create_' . $table_name . '_table';

            Artisan::call('make:migration', [
                'name' => $migration_name,
                '--create' => $table_name,
                '--table' => $table_name
            ]);

            $this->info("Migration generated for $table_name");
        }

        $this->info('All migrations generated successfully.');

        return Command::SUCCESS;
    }

}

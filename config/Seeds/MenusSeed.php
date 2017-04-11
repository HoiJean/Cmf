<?php
use Migrations\AbstractSeed;

/**
 * Menus seed.
 */
class MenusSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Main Menu', 'slug' => 'mainmenu'],
            ['name' => 'Footer Menu', 'slug' => 'footermenu'],
        ];

        $table = $this->table('menus');
        $table->insert($data)->save();
    }
}

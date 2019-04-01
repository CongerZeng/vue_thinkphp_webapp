<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Post extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('post');
        $table
        ->addColumn('p_publish','string')
        ->addColumn('p_avatar','string')
        ->addColumn('p_name','string')
        ->addColumn('p_section','string')
        ->addColumn('p_title','string')
        ->addColumn('p_content','string')
        ->addColumn('p_time','string')
        ->addColumn('p_picUrl','string')
        ->addColumn('page','string')
        ->create();
    }
}

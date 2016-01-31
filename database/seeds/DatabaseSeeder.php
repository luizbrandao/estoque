<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('UserTableSeeder');
        $this->call('ProdutoTableSeeder');

        //Model::reguard();
    }
}

class ProdutoTableSeeder extends Seeder{
  public function run(){
    DB::insert('insert into produtos (nome, quantidade, valor, descricao, created_at, updated_at) values (?,?,?,?,?,?)', array('Geladeira', 2, 590.00, 'Side by side com gelo na porta', '2015-07-01', '2015-07-01'));
    DB::insert('insert into produtos (nome, quantidade, valor, descricao, created_at, updated_at) values (?,?,?,?,?,?)', array('Fogão', 5, 950.00, 'Painel Automatico e forno eletrico', '2015-07-01', '2015-07-01'));
    DB::insert('insert into produtos (nome, quantidade, valor, descricao, created_at, updated_at) values (?,?,?,?,?,?)', array('Microondas', 1, 250.00, 'Manda sms quando termina de esquentar', '2015-07-01', '2015-07-01'));
    DB::insert('insert into produtos (nome, quantidade, valor, descricao, created_at, updated_at) values (?,?,?,?,?,?)', array('Cama Box Casal', 3, 340.00, 'Excelente Cama', '2015-07-01', '2015-07-01'));
  }
}

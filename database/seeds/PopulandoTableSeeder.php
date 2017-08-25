<?php

use App\Endereco;
use App\Cliente;
use App\Poltrona;
use App\Programacao;
use App\Teatro;
use App\Bilhete;
use App\ReservaBilhete;
use App\Espetaculo;
use App\TeatroPrograPoltro;
use Illuminate\Database\Seeder;


class PopulandoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 0;

        $teatro = Teatro::firstOrNew([
        		'nome' => str_random(10),
        		'endereco' => str_random(10)
        	]);
        	
        	$teatro->save();
        	$teatro_id = $teatro->id;
        
        while ($count != 100){
        	$endereco = Endereco::firstOrNew([
        		'cidade' => str_random(10),
        		'bairro' => str_random(10), 
        		'rua' 	=> str_random(10), 
        		'numero' => $count++
        	]);

        	$endereco->save();
        	$endereco_id = $endereco->id;   

        	$cliente = Cliente::firstOrNew([
        		'nome' => str_random(10),
        		'cpf' => rand(0, 9).rand(0, 9).rand(0, 9).'.'.rand(0, 9).rand(0, 9).rand(0, 9).'.'.rand(0, 9).rand(0, 9).rand(0, 9).'-'.rand(0, 9).rand(0, 9),
        		'dt_nascimento'	=> rand(1, 31).'/'.rand(1, 12).'/'.rand(1900, 2017), 
        		'telefone'	=> '9'.'-'.rand(9, 8).rand(0, 9).rand(0, 9).rand(0, 9).'-'.rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9), 
        		'is_vip'	=> rand(0, 1),
        		'endereco_id' => $endereco_id
        	]);   	

        	$cliente->save();
        	$cliente_id = $cliente->id; 

        	$poltrona = Poltrona::firstOrNew([
        		'num_fila' => $count,
        		'posicao_fila' => str_random(10)
        	]);

        	$poltrona->save();
        	$poltrona_id = $poltrona->id; 

        	$espetaculo = Espetaculo::firstOrNew([
        		'nome' => str_random(10)
        	]);
        	
        	$espetaculo->save();
        	$espetaculo_id = $espetaculo->id;

        	$programacao = Programacao::firstOrNew([
        		'data' => rand(0, 31).'/'.rand(0, 12).'/'.rand(1900, 2017),
        		'horario' => rand(0, 24).':'.rand(0, 60),
        		'espetaculo_id' => $espetaculo_id
        	]);
        	
        	$programacao->save();
        	$programacao_id = $programacao->id;

        	$bilhete = Bilhete::firstOrNew([
        		'valor' => rand(0,100).'.'.rand(0,99),
        		'programacao_id' => $programacao_id,
        		'poltrona_id' => $poltrona_id
        	]);
        	
        	$bilhete->save();
        	$bilhete_id = $bilhete->id;

        	$reserva = ReservaBilhete::firstOrNew([
        		'tempo_reserva' => $count,
        		'status' => rand(0, 1),
        		'forma_adquirir' => 'Presencial',
        		'cliente_id' => $cliente_id,
        		'bilhete_id' => $bilhete_id
        	]);
        	
        	$reserva->save();
        	$reserva_id = $reserva->id;

        	$teatroProgrPoltro = TeatroPrograPoltro::firstOrNew([
        		'teatro_id' => $teatro_id,
        		'poltrona_id' =>  $poltrona_id,
        		'programacao_id' =>  $programacao_id
        	]);
        	
        	$teatroProgrPoltro->save();
        }

        
 		echo "...";
        $count++;       
    }
}
<?php

class HelloController extends AppController {
//action
	//hello/index
	public function index (){

		//enviando o conteudo  da variavel 
		//para a VIEW
		$nomeCompleto= "Oseias Dalponte";
		$this ->set('nome',$nomeCompleto);

}
//hello/sobremim
	public function sobremim(){

	}
	//hello/contato
	public function contato (){

	}
	//hello/teste
	public function teste (){
		
	}


}


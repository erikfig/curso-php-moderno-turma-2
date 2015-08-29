<?php

namespace PhpModerno\Query;

class Romanos
{

	private $dicionario = array(1=>"I", 5=>"V", 10=>"X", 50=>"L");

	public function convert($numero)
	{
		if(isset($this->dicionario[$numero]))
			return $this->dicionario[$numero];
		elseif(isset($this->dicionario[$numero/2]))
			return $this->dicionario[$numero/2].$this->dicionario[$numero/2];
		elseif(isset($this->dicionario[$numero/3]))
			return $this->dicionario[$numero/3].$this->dicionario[$numero/3].$this->dicionario[$numero/3];
	}

}
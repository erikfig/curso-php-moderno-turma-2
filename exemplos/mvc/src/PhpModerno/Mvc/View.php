<?php

namespace PhpModerno\Mvc;

class View
{
	protected $base_path;
	protected $content;

	public function __construct($base_path)
	{
		$this->base_path = $base_path;
	}

	public function render($view, Array $data, $template)
	{
		$this->content = $this->getFileContents($view, $data);
        
        return $this->getFileContents($template);
	}

	protected function getFileContents($file, Array $data=null)
	{
		if (!is_null($data))
			extract($data);

		ob_start();
        include $this->base_path.DIRECTORY_SEPARATOR.$file;
        return ob_get_clean();
	}

	protected function content()
	{
		echo $this->content;
	}
}
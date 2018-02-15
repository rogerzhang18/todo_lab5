<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Helpme extends Application
{

	/**
	 * Controller for help me page
	 *
	 * parses markup string from ../data/jobs.md
	 * and displays the formatted version.
	 *
	 */
	public function index()
	{
		$this->data['pagetitle'] = 'Help Wanted!';
		//get text with markdown editor, from markdown file
		$stuff = file_get_contents('../data/jobs.md');
		//set text to content from markdown
		$this->data['content'] = $this->parsedown->parse($stuff);
		$this->render(); 	}

}

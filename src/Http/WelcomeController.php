<?php

namespace Ha\Welcome\Http;

class WelcomeController{

	public function welcome($name = null){
		return view('devdojowelcome::welcome', compact('name'));
	}

}

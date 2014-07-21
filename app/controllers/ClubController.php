<?php

class ClubController extends BaseController
{

	public function getIndex()
	{
		$rest['club'] = $this->listar();

		return View::make('club.index')->with($rest);
	}


	public function listar()
	{
		$club = array("Boca Juniors","Rive Plate");

		return $club;

	}
}



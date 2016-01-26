<?php

namespace Blog\BlogBundle\Lib\Searcher;

use Blog\BlogBundle\Repository\PostRepository;

class Searcher
{
	
	private $repository;

	public function __construct(PostRepository $repository)
	{
		$this->repository = $repository;
	}

	public function search($string)
	{
		return $this->repository->getIdArrayByName($string);
		//return array(1);
	}
}
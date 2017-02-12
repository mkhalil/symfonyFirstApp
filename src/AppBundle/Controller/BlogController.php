<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
	/**
	 * @Route("/blog")
	 */
	public function listAction() {
		return $this->render('blog/list.hmtl.twig');
	}
	
}
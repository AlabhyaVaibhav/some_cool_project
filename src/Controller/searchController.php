<?php 
namespace App\Controller;
/**
 * 
 */
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Services\indexFunction;

class searchController extends AbstractController{
	public function indexAction(){
		return indexFunction();
	}
}

?>
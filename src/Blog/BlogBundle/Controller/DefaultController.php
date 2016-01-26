<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
//use Blog\BlogBundle\Lib\Searcher\Searcher;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="blog_blog_homepage")
     */
    public function indexAction()
    {
    	$posts = $this->getDoctrine()
    			->getRepository('BlogBlogBundle:Post')
    			->findAll();

    	return $this->render('BlogBlogBundle:Default:index.html.twig', array('posts' => $posts));
    }

    /**
     * @Route("/{word}", name="blog_blog_word")
     * @Method({"GET"})
     */
    public function wordAction($word, Request $request)
    {
        //return $this->render('BlogBlogBundle:Default:index.html.twig');

    	//$request = $this->getRequest();
    	$param = $request->query->get('param');

    	return $this->render('BlogBlogBundle:Default:word.html.twig', array(
    																'word' => $word,
    																'param' => $param
    		));

    	//return new Response("<html><body>Hello $param</body></html>");

    	//$response = new Response(json_encode("<html><body>Hello $param</body></html>"));
    	//$response->headers->set('Content-Type', 'application/json');
    	//return $response;
    }

    /**
     * @Route("post/{id}", 
     * name="blog_blog_post", 
     * requirements={"id": "\d+"
     * })
     * @Method({"GET"})
     */
    public function showAction($id){
    	$repository = $this->getDoctrine()
    			->getRepository('BlogBlogBundle:Post');

    	$query = $repository->createQueryBuilder('p')
    			->where('p.id = :id')
    			->setParameter('id', $id)
    			->getQuery();

    	$post = $query->getSingleResult();

    	return $this->render('BlogBlogBundle:Default:show.html.twig', array('post' => $post));
    }

    /**
     * @Route("/post/search", name="blog_blog_search")
     * @Method({"POST"})
     */
    public function searchAction(Request $request){
    	//$searcher = new Searcher();
    	//$request->query->get('param');
    	//$result = $searcher->search($this->getRequest()->request->get('search'));
    	
    	$searcher = $this->get('searcher');
    	$result = $searcher->search($request->request->get('search'));

    	$repository = $this->getDoctrine()
    			->getRepository('BlogBlogBundle:Post');

    	$query = $repository->createQueryBuilder('p')
    			->where('p.id IN (:ids)')
    			->setParameter('ids', $result)
    			->getQuery();
    			//->where('p.id IN (:ids)')
    			//->setParameter('ids', $result)

    	$post = $query->getResult();

    	return $this->render('BlogBlogBundle:Default:index.html.twig', array('posts' => $post));
    }
}

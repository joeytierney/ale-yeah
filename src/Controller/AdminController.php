<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin_home")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        $template = 'admin/index.html.twig';
        $args = [];
        return $this->render($template, $args);
    }

    /**
     * @Route("/crud", name="admin_crud")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function crud()
    {
        return $this->render('admin/crud.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
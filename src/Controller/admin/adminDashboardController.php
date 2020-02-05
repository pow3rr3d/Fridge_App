<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class adminDashboardController extends AbstractController
{
    /**
     * @Route("/admin/dashboard", name="admin.dashboard.index")
     */

    public function index()
    {
        return $this->render('admin/dashboard/index.html.twig');
    }

}
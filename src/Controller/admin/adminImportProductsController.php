<?php

namespace App\Controller\admin;


use App\Entity\Category;
use App\Entity\Product;
use App\Form\ImportCategoriesType;
use Doctrine\ORM\EntityManagerInterface;
use League\Csv\Exception;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use League\Csv\Reader;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/admin/import/products", name="admin_import_categories")
 */
class adminImportProductsController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/", name="admin_import_categories_index")
     * @param SluggerInterface $slugger
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function index(SluggerInterface $slugger, Request $request)
    {
        $filesystem = new Filesystem();
        $form = $this->createForm(ImportCategoriesType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /**
             * @var UploadedFile $file
             */
            $file = $form['file']->getData();

            $csv = Reader::createFromString(file_get_contents($file->getPathname()));
            $csv->setDelimiter(',');
            $csv->setHeaderOffset(0);


            $header = $csv->getHeader(); //returns the CSV header record
            $records = $csv->getRecords(); //returns all the CSV records as an Iterator object

            dump($records);

            foreach ($records as $key => $record)
            {
                $key = $key + 1;

                $product = new Product();
                $product->setName($record['name']);
                $product->setDescription($record['description']);
                $product->setCategory($this->em->getRepository(Category::class)->find($record['category']));
                $product->setUpdatedAt(new \DateTime('now'));
                $product->setFilename("");

                $this->em->persist($product);
                $this->em->flush();
            }

        }

        return $this->render('admin/import/products/index.html.twig', [
            "form" => $form->CreateView(),
        ]);
    }


}
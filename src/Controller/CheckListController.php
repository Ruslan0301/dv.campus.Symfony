<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheckListController extends AbstractController
{
    private array $categories = [
      1 =>[
          'titile' => 'My Summer weekeds',
          'notes' =>[1,2,3]
      ],

      2 =>[
          'titile' => 'My favorite books review',
          'notes' =>[4,5,6]
      ],

      3 =>[
          'titile' => 'My friend hobbies',
          'notes' =>[7,8,9]
      ]
    ];
    private array $notes = [
        1 => [
            'title' => 'Some note 1',
            'text' => 'Lorem ipsun 1'
        ],
        2 => [
            'title' => 'Some note 2',
            'text' => 'Lorem ipsun 2'
        ],
        3 => [
            'title' => 'Some note 3',
            'text' => 'Lorem ipsun 3'
        ],
        4 => [
            'title' => 'Some note 4',
            'text' => 'Lorem ipsun 4'
        ],
        5 => [
            'title' => 'Some note 5',
            'text' => 'Lorem ipsun 5'
        ],
        6 => [
            'title' => 'Some note 6',
            'text' => 'Lorem ipsun 6'
        ],
        7 => [
            'title' => 'Some note 7',
            'text' => 'Lorem ipsun 7'
        ],
        8 => [
            'title' => 'Some note 8',
            'text' => 'Lorem ipsun 8'
        ],
        9 => [
            'title' => 'Some note 9',
            'text' => 'Lorem ipsun 9'
        ]

    ];

    /**
     * @Route("/check/list", name="check_list_list_all")
     */
    public function listAll(): Response
    {
        $foo = false;
        return $this->render('check_list/index.html.twig', [
           'notes' => $this->notes,
        ]);
    }

    /**
     * @Route("/check/list/{categoryId}", name="check_list_list_by_category",requirements={"categoryId"}="\d+")
     */
    public function listByCategory(string $categoryId): Response
    {
        if(!isset($this->categories[(int)$categoryId])){
          throw new Exception('You ask category that not exist');
        }
        $category =  $this->categories[(int)$categoryId] ?? null;

//        return $this->render('check_list/index.html.twig', [
//            'controller_name' => 'CheckListController',
//        ]);
    }

    /**
     * @Route("/check/list/{category_id}/{product_id}", name="check_list_get")
     */
    public function getAction(): Response
    {
//        return $this->render('check_list/index.html.twig', [
//            'controller_name' => 'CheckListController',
//        ]);
    }
}

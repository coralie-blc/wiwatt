<?php

// namespace App\Tests;

// use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


// class AdminControllerTest extends WebTestCase 
// {
//     /**
//      * On crée une méthode qui va tester un ensemble de liens
//      * On relie cette liste de liste de liens avec notre méthode grâce à cette annotation
//      *
//      * @dataProvider urlProviderBack
//      */
//     public function testIfBackRoutesAreSuccessful($url)
//     {
//         $client = static::createClient([], [
//             'PHP_AUTH_USER' => 'blanco.cora@gmail.com',
//             'PHP_AUTH_PW' => 'test'
//         ]);
//         $crawler = $client->request('GET', $url);

//         if ($client->getResponse()->isRedirection()) {
//             $client->followRedirect();
//         }

//         $this->assertTrue($client->getResponse()->isSuccessful());
//     }

//     public function urlProviderBack()
//     {
//         yield ['/admin'];
//         yield ['/'];
//     }
// }
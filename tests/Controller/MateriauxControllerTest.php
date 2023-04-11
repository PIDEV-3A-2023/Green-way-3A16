<?php

namespace App\Test\Controller;

use App\Entity\Materiaux;
use App\Repository\MateriauxRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MateriauxControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private MateriauxRepository $repository;
    private string $path = '/materiaux/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Materiaux::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Materiaux index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'materiaux[type]' => 'Testing',
            'materiaux[taux]' => 'Testing',
            'materiaux[duree]' => 'Testing',
            'materiaux[conditionUt]' => 'Testing',
        ]);

        self::assertResponseRedirects('/materiaux/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Materiaux();
        $fixture->setType('My Title');
        $fixture->setTaux('My Title');
        $fixture->setDuree('My Title');
        $fixture->setConditionUt('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Materiaux');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Materiaux();
        $fixture->setType('My Title');
        $fixture->setTaux('My Title');
        $fixture->setDuree('My Title');
        $fixture->setConditionUt('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'materiaux[type]' => 'Something New',
            'materiaux[taux]' => 'Something New',
            'materiaux[duree]' => 'Something New',
            'materiaux[conditionUt]' => 'Something New',
        ]);

        self::assertResponseRedirects('/materiaux/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getType());
        self::assertSame('Something New', $fixture[0]->getTaux());
        self::assertSame('Something New', $fixture[0]->getDuree());
        self::assertSame('Something New', $fixture[0]->getConditionUt());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Materiaux();
        $fixture->setType('My Title');
        $fixture->setTaux('My Title');
        $fixture->setDuree('My Title');
        $fixture->setConditionUt('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/materiaux/');
    }
}

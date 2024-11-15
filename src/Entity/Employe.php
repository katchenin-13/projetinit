<?php

namespace App\Entity;

use App\Repository\EmployeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Table;

#[ORM\Entity(repositoryClass: EmployeRepository::class)]
#[Table(name: 'user_employe')]
class Employe extends Personne
{
   

    public function __construct()
    {
        parent::__construct();
       
    }

}

<?php


namespace App\Service;

use App\Entity\AnneeScolaire;
use App\Entity\ArticleMagasin;
use App\Entity\Document;
use App\Entity\Echeancier;
use App\Entity\InfoInscription;
use App\Entity\Inscription;
use App\Entity\LigneDocument;
use App\Entity\Mouvement;
use App\Entity\MoyenneMatiere;
use App\Entity\Preinscription;
use App\Entity\Sens;
use App\Entity\Sortie;
use App\Repository\AnneeScolaireRepository;
use App\Repository\ArticleMagasinRepository;
use App\Repository\ClasseRepository;
use App\Repository\CoursRepository;
use App\Repository\DocumentRepository;
use App\Repository\EcheancierRepository;
use App\Repository\InfoInscriptionRepository;
use App\Repository\InscriptionRepository;
use App\Repository\LigneDocumentRepository;
use App\Repository\MatiereRepository;
use App\Repository\MatiereUeRepository;
use App\Repository\MoyenneMatiereRepository;
use App\Repository\NoteRepository;
use App\Repository\SemestreRepository;
use App\Repository\SessionRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class Service
{
   
  
    protected $articleMagasinRepository;
    protected $moyenneMatiereRepository;
    protected $matiereUeRepository;
    protected $matiereRepository;
    protected $classeRepository;
    protected $semestreRepository;
    protected $sessionRepository;
    protected $noteRepository;
    protected $coursRepository;
    private $security;
    

    public function __construct(
        
     
        Security $security,
       
    ) {
        
        $this->security = $security;
       

        //$this->verifieIfFile2(15,2);
    }


    public  function  getUser()
    {
        return $this->security->getUser();
    }
   




    
}

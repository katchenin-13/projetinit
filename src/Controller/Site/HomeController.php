<?php

namespace App\Controller\Site;

use App\Controller\FileTrait;
use App\DTO\InscriptionDTO;
use App\Entity\BlocEcheancier;
use App\Entity\Classe;
use App\Entity\Echeancier;
use App\Entity\EcheancierProvisoire;
use App\Entity\Employe;
use App\Entity\Etudiant;
use App\Entity\Fonction;
use App\Entity\InfoEtudiant;
use App\Entity\InfoInscription;
use App\Entity\Inscription;
use App\Entity\NiveauEtudiant;
use App\Entity\Pays;
use App\Entity\Preinscription;
use App\Entity\Utilisateur;
use App\Entity\UtilisateurGroupe;
use App\Form\CiviliteType;
use App\Form\EtudiantAdminNewType;
use App\Form\EtudiantAdminType;
use App\Form\EtudiantDocumentType;
use App\Form\EtudiantType;
use App\Form\InscriptionPayementType;
use App\Form\RegisterType;
use App\Form\UtilisateurInscriptionSimpleType;
use App\Form\UtilisateurInscriptionType;
use App\Form\UtilisateurType;
use App\Repository\ClasseRepository;
use App\Repository\EcheancierRepository;
use App\Repository\EmployeRepository;
use App\Repository\EtudiantRepository;
use App\Repository\FiliereRepository;
use App\Repository\FonctionRepository;
use App\Repository\FraisInscriptionRepository;
use App\Repository\FraisRepository;
use App\Repository\GroupeRepository;
use App\Repository\InscriptionRepository;
use App\Repository\NaturePaiementRepository;
use App\Repository\NiveauEtudiantRepository;
use App\Repository\NiveauRepository;
use App\Repository\PaysRepository;
use App\Repository\PersonneRepository;
use App\Repository\PreinscriptionRepository;
use App\Repository\UtilisateurGroupeRepository;
use App\Repository\UtilisateurRepository;
use App\Security\LoginFormAuthenticator;
use App\Service\ActionRender;
use App\Service\FormError;
use App\Service\SendMailService;
use App\Service\Service;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\QueryBuilder;
use Omines\DataTablesBundle\Adapter\Doctrine\ORMAdapter;
use Omines\DataTablesBundle\Column\TextColumn;
use Omines\DataTablesBundle\DataTableFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Event\AuthenticationEvent;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader;

class HomeController extends AbstractController
{
    use FileTrait;

    protected const UPLOAD_PATH = 'media_etudiant';
    private $em;
    public function __construct(EntityManagerInterface $em)
    {

        $this->em = $em;
    }
   
}

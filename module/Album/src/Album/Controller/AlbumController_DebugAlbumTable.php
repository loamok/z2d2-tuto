<?php
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AlbumController extends AbstractActionController
{
    /**
     * Classe d'accès aux données
     * 
     * @var \Album\Model\AlbumTable
     */
    protected $albumTable = null;
    
    /**
     * Chargement de l'accesseur des données à la demande.
     * 
     * @return \Album\Model\AlbumTable
     */
    protected function getAlbumTable() {
        if(is_null($this->albumTable)) {
            $sm = $this->getServiceLocator();
            $this->albumTable = $sm->get('Album\Model\AlbumTable');
        }
        return $this->albumTable;
    }

    /**
     * Action 'index' /album
     * @pending Affiche la liste des albums de l'application
     * 
     * @return array
     */
    public function indexAction() {
        $at = $this->getAlbumTable();
        return array(
            'at' => print_r($at, true),
        );
    }

    public function addAction() {
    }

    public function editAction() {
    }

    public function deleteAction() {
    }
}

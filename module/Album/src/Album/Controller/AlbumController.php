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
     * Charge la liste des albums de l'application et la passe au script de vue
     * 
     * @return array
     */
    public function indexAction() {
        return new ViewModel(array(
            'albums' => $this->getAlbumTable()->fetchAll(),
        ));
    }

    public function addAction() {
    }

    public function editAction() {
    }

    public function deleteAction() {
    }
}

<?php
namespace Album;

use Album\Model\Album;
use Album\Model\AlbumTable;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class Module
{
    public function getServiceConfig() {
        return array(
            'factories' => array(
                // $sm fait donc référence au "ServiceManager"
                'Album\Model\AlbumTable' =>  function($sm) {
                    // 'AlbumTableGateway' est donc la fonction pseudo anonyme 
                    // définie dans la clé de tableau suivante
                    $tableGateway = $sm->get('AlbumTableGateway');
                    // Ici c'est la classe AlbumTable qui seras utilisé
                    // notez que nous pourrions utiliser une classe 'TotoTable'
                    // si tel était notre souhait.
                    $table = new AlbumTable($tableGateway);
                    return $table;
                },
                'AlbumTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    // Voilà c'est ici que ça se passe pour notre classe Album
                    $resultSetPrototype->setArrayObjectPrototype(new Album());
                    // /!\ ATTENTION /!\ le premier paramètre de « TableGateway » est le nom de la table
                    // à utiliser. Nous utilisons une table nommée « Album » avec un 'A' majuscule.
                    return new TableGateway('Album', $dbAdapter, null, $resultSetPrototype);
                },
            ),
        );
    }
    
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}

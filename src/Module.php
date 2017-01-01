<?php
namespace Pacificnm\Mapper;

class Module
{
    /**
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/pacificnm.mapper.global.php';
    }
    
    /**
     *
     * @return string[][][]
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/'
                ),
            ),
        );
    }
}


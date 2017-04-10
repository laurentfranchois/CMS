<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\File;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class File extends \Concrete\Core\Entity\File\File implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = ['fDateAdded' => NULL, 'fPassword' => NULL, 'versions' => NULL, 'fOverrideSetPermissions' => false, 'ocID' => 0, 'author' => NULL, 'folderTreeNodeID' => 0, 'storageLocation' => NULL];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->fDateAdded, $this->fPassword, $this->versions, $this->fOverrideSetPermissions, $this->ocID, $this->author, $this->folderTreeNodeID, $this->storageLocation);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);

            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);
    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'fID', 'fDateAdded', 'fPassword', 'versions', 'fOverrideSetPermissions', 'ocID', 'author', 'folderTreeNodeID', 'storageLocation'];
        }

        return ['__isInitialized__', 'fID'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (File $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->fDateAdded, $this->fPassword, $this->versions, $this->fOverrideSetPermissions, $this->ocID, $this->author, $this->folderTreeNodeID, $this->storageLocation);
        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __call($nm, $a)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$nm, $a]);

        return parent::__call($nm, $a);
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionResponseClassName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionResponseClassName', []);

        return parent::getPermissionResponseClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionAssignmentClassName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionAssignmentClassName', []);

        return parent::getPermissionAssignmentClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionObjectKeyCategoryHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionObjectKeyCategoryHandle', []);

        return parent::getPermissionObjectKeyCategoryHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionObjectIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionObjectIdentifier', []);

        return parent::getPermissionObjectIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getStorageLocationID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStorageLocationID', []);

        return parent::getStorageLocationID();
    }

    /**
     * {@inheritDoc}
     */
    public function getFileStorageLocationObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileStorageLocationObject', []);

        return parent::getFileStorageLocationObject();
    }

    /**
     * {@inheritDoc}
     */
    public function getFileVersions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileVersions', []);

        return parent::getFileVersions();
    }

    /**
     * {@inheritDoc}
     */
    public function reindex()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'reindex', []);

        return parent::reindex();
    }

    /**
     * {@inheritDoc}
     */
    public function setStorageLocation(\Concrete\Core\Entity\File\StorageLocation\StorageLocation $location)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStorageLocation', [$location]);

        return parent::setStorageLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function setFileStorageLocation(\Concrete\Core\Entity\File\StorageLocation\StorageLocation $newLocation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFileStorageLocation', [$newLocation]);

        return parent::setFileStorageLocation($newLocation);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($pw)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$pw]);

        return parent::setPassword($pw);
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginalPage($ocID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginalPage', [$ocID]);

        return parent::setOriginalPage($ocID);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginalPageObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginalPageObject', []);

        return parent::getOriginalPageObject();
    }

    /**
     * {@inheritDoc}
     */
    public function overrideFileFolderPermissions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'overrideFileFolderPermissions', []);

        return parent::overrideFileFolderPermissions();
    }

    /**
     * {@inheritDoc}
     */
    public function resetPermissions($fOverrideSetPermissions = 0)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetPermissions', [$fOverrideSetPermissions]);

        return parent::resetPermissions($fOverrideSetPermissions);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserID', []);

        return parent::getUserID();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Concrete\Core\Entity\User\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileSets()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileSets', []);

        return parent::getFileSets();
    }

    /**
     * {@inheritDoc}
     */
    public function isStarred($u = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStarred', [$u]);

        return parent::isStarred($u);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdded($fDateAdded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdded', [$fDateAdded]);

        return parent::setDateAdded($fDateAdded);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdded', []);

        return parent::getDateAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function createNewVersion($copyUnderlyingFile = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createNewVersion', [$copyUnderlyingFile]);

        return parent::createNewVersion($copyUnderlyingFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getVersionToModify($forceCreateNew = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersionToModify', [$forceCreateNew]);

        return parent::getVersionToModify($forceCreateNew);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileID', []);

        return parent::getFileID();
    }

    /**
     * {@inheritDoc}
     */
    public function setFileFolder(\Concrete\Core\Tree\Node\Type\FileFolder $folder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFileFolder', [$folder]);

        return parent::setFileFolder($folder);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileFolderObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileFolderObject', []);

        return parent::getFileFolderObject();
    }

    /**
     * {@inheritDoc}
     */
    public function getFileNodeObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileNodeObject', []);

        return parent::getFileNodeObject();
    }

    /**
     * {@inheritDoc}
     */
    public function duplicate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'duplicate', []);

        return parent::duplicate();
    }

    /**
     * {@inheritDoc}
     */
    public function getApprovedVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApprovedVersion', []);

        return parent::getApprovedVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function inFileSet($fs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'inFileSet', [$fs]);

        return parent::inFileSet($fs);
    }

    /**
     * {@inheritDoc}
     */
    public function delete($removeNode = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'delete', [$removeNode]);

        return parent::delete($removeNode);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecentVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecentVersion', []);

        return parent::getRecentVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion($fvID = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersion', [$fvID]);

        return parent::getVersion($fvID);
    }

    /**
     * {@inheritDoc}
     */
    public function getVersionList()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersionList', []);

        return parent::getVersionList();
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalDownloads()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalDownloads', []);

        return parent::getTotalDownloads();
    }

    /**
     * {@inheritDoc}
     */
    public function getDownloadStatistics($limit = 20)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDownloadStatistics', [$limit]);

        return parent::getDownloadStatistics($limit);
    }

    /**
     * {@inheritDoc}
     */
    public function trackDownload($rcID = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'trackDownload', [$rcID]);

        return parent::trackDownload($rcID);
    }

    /**
     * {@inheritDoc}
     */
    public function isError()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isError', []);

        return parent::isError();
    }

}

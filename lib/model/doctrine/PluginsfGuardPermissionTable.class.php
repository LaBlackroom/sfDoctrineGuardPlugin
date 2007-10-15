<?php
/*
/*
 * Plugin class
 *
 */
class PluginsfGuardPermissionTable extends Doctrine_Table
{
    public function retrieveByName( $name )
    {
        return $this->createQuery()->where( 'sfGuardPermission.name = ?', $name )->execute()->getFirst();
    }
}
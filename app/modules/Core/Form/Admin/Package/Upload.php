<?php

/**
 * PhalconEye
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 *
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to phalconeye@gmail.com so we can send you a copy immediately.
 *
 */

namespace Core\Form\Admin\Package;

class Upload extends \Engine\Form
{

    public function init()
    {
        $this
            ->setOption('title', 'Install new package')
            ->setOption('description', 'Select package you want to install (zip extension).');

        $this->addElement('file', 'package', array(
            'label' => 'Package',
        ));

        $this->addButton('Upload', true);
        $this->addButtonLink('Cancel', array('for' => 'admin-packages'));
    }
}
<?php
namespace Grav\Common\GPM\Remote;

use Grav\Common\Data\Data;
use Grav\Common\GPM\Common\Package as BasePackage;

class Package extends BasePackage {
    public function __construct($package, $package_type = null) {
        $data = new Data($package);
        parent::__construct($data, $package_type);
    }
}

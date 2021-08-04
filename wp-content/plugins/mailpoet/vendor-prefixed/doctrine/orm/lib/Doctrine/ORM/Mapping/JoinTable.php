<?php
 namespace MailPoetVendor\Doctrine\ORM\Mapping; if (!defined('ABSPATH')) exit; use Attribute; use MailPoetVendor\Doctrine\Common\Annotations\Annotation\NamedArgumentConstructor; final class JoinTable implements \MailPoetVendor\Doctrine\ORM\Mapping\Annotation { public $name; public $schema; public $joinColumns = []; public $inverseJoinColumns = []; public function __construct(?string $name = null, ?string $schema = null, $joinColumns = [], $inverseJoinColumns = []) { $this->name = $name; $this->schema = $schema; $this->joinColumns = $joinColumns instanceof \MailPoetVendor\Doctrine\ORM\Mapping\JoinColumn ? [$joinColumns] : $joinColumns; $this->inverseJoinColumns = $inverseJoinColumns instanceof \MailPoetVendor\Doctrine\ORM\Mapping\JoinColumn ? [$inverseJoinColumns] : $inverseJoinColumns; } } 
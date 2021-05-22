<?php
 namespace MailPoetVendor\Doctrine\ORM\Event; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\ORM\EntityManagerInterface; class OnClearEventArgs extends \MailPoetVendor\Doctrine\Common\EventArgs { private $em; private $entityClass; public function __construct(\MailPoetVendor\Doctrine\ORM\EntityManagerInterface $em, $entityClass = null) { $this->em = $em; $this->entityClass = $entityClass; } public function getEntityManager() { return $this->em; } public function getEntityClass() { return $this->entityClass; } public function clearsAllEntities() { return $this->entityClass === null; } } 
<?php
/**
 * Quip
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of Quip, a simpel commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * @package quip
 */
$xpdo_meta_map['quipComment']= array (
  'package' => 'quip',
  'table' => 'quip_comments',
  'fields' => 
  array (
    'thread' => '',
    'parent' => 0,
    'rank' => NULL,
    'author' => 0,
    'body' => '',
    'createdon' => NULL,
    'editedon' => NULL,
    'approved' => 1,
    'approvedon' => NULL,
    'approvedby' => 0,
    'name' => '',
    'email' => '',
    'website' => '',
    'ip' => '0.0.0.0',
    'deleted' => 0,
    'deletedon' => NULL,
    'deletedby' => 0,
    'resource' => 0,
    'idprefix' => 'qcom',
    'existing_params' => '[]',
  ),
  'fieldMeta' => 
  array (
    'thread' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
    'parent' => 
    array (
      'dbtype' => 'integer',
      'precision' => '10',
      'phptype' => 'integer',
      'attributes' => 'unsigned',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'rank' => 
    array (
      'dbtype' => 'tinytext',
      'phptype' => 'string',
    ),
    'author' => 
    array (
      'dbtype' => 'integer',
      'precision' => '10',
      'phptype' => 'integer',
      'attributes' => 'unsigned',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'body' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'text',
      'null' => false,
      'default' => '',
    ),
    'createdon' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
    ),
    'editedon' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
    ),
    'approved' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'boolean',
      'attributes' => 'unsigned',
      'null' => false,
      'default' => 1,
      'index' => 'index',
    ),
    'approvedon' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
    ),
    'approvedby' => 
    array (
      'dbtype' => 'integer',
      'precision' => '10',
      'phptype' => 'integer',
      'attributes' => 'unsigned',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'email' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'website' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'ip' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '0.0.0.0',
    ),
    'deleted' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'boolean',
      'attributes' => 'unsigned',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'deletedon' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
    ),
    'deletedby' => 
    array (
      'dbtype' => 'integer',
      'precision' => '10',
      'phptype' => 'integer',
      'attributes' => 'unsigned',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'resource' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'attributes' => 'unsigned',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'idprefix' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => 'qcom',
    ),
    'existing_params' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'json',
      'default' => '[]',
    ),
  ),
  'aggregates' => 
  array (
    'Thread' => 
    array (
      'class' => 'quipThread',
      'local' => 'thread',
      'foreign' => 'name',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Author' => 
    array (
      'class' => 'modUser',
      'local' => 'author',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Resource' => 
    array (
      'class' => 'modResource',
      'local' => 'resource',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Parent' => 
    array (
      'class' => 'quipComment',
      'local' => 'parent',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
  'composites' => 
  array (
    'Children' => 
    array (
      'class' => 'quipComment',
      'local' => 'id',
      'foreign' => 'parent',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'Ancestors' => 
    array (
      'class' => 'quipCommentClosure',
      'local' => 'id',
      'foreign' => 'ancestor',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'Descendants' => 
    array (
      'class' => 'quipCommentClosure',
      'local' => 'id',
      'foreign' => 'descendant',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);

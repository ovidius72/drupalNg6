<?php

namespace Drupal\ng6_resources\Plugin\resource\entities\nodes;

use Drupal\restful\Plugin\resource\ResourceInterface;
use Drupal\restful\Plugin\resource\ResourceNode;

/**
 * Class Pages__1_0
 * @package Drupal\ng6_resources\Plugin\resource\entities\nodes
 *
 * @Resource(
 *   name = "nodes:1.0",
 *   resource = "nodes",
 *   label = "Nodes",
 *   description = "Export the nodes with all authentication providers.",
 *   authenticationTypes = TRUE,
 *   authenticationOptional = TRUE,
 *   dataProvider = {
 *     "entityType": "node",
 *     "bundles": {
 *      },
 *   },
 *   majorVersion = 1,
 *   minorVersion = 0
 * )
 */
class Nodes__1_0 extends ResourceNode implements ResourceInterface {

  /**
   * {@inheritdoc}
   */
  protected function publicFields() {
    $public_fields = parent::publicFields();

//    unset($public_fields['self']);
    unset($public_fields['label']);

    $public_fields['title'] = array(
      'wrapper_method' => 'label',
      'wrapper_method_on_entity' => TRUE,
    );

    $public_fields['type'] = array(
      'property' => 'type'
    );
//
//    $public_fields['nid'] = array(
//      'wrapper_method' => 'getIdentifier',
//      'wrapper_method_on_entity' => TRUE,
//      'process_callbacks' => array(
//        '\Drupal\ng6_resources\utils\NG6_Utils::getNode'
//      ),
//    );

    $public_fields['body'] = array(
      'property' => 'body',
    );

    $public_fields['body_raw'] = array(
      'property' => 'body',
      'sub_property' => 'value',
      'process_callbacks' => array(
        'strip_tags'
      )
    );
    $public_fields['is_new'] = array(
      'property' => 'is_new',
    );

    $public_fields['sticky'] = array(
      'property' => 'sticky',
    );

    $public_fields['language'] = array(
      'property' => 'language',
    );

    $public_fields['status'] = array(
      'property' => 'status',
    );

    $public_fields['promote'] = array(
      'property' => 'promote',
    );

    $public_fields['comment'] = array(
      'property' => 'comment',
    );

    $public_fields['url'] = array(
      'property' => 'url',
    );

    $public_fields['edit_url'] = array(
      'property' => 'edit_url',
    );

    $public_fields['created'] = array(
      'property' => 'created',
    );

    $public_fields['changed'] = array(
      'property' => 'changed',
    );

    $public_fields['author'] = array(
      'property' => 'author',
      'sub_property' => 'uid'
    );

    $public_fields['comment'] = array(
      'property' => 'comment',
    );

    $public_fields['comments'] = array(
      'property' => 'comments',
    );

    $public_fields['comment_count'] = array(
      'property' => 'comment_count',
    );

    $public_fields['comment_count_new'] = array(
      'property' => 'comment_count_new',
    );

    return $public_fields;
  }
}

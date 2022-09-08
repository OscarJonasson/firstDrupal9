<?php

namespace Drupal\customer_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\url;

/**
 * @file
 * Contains \Drupal\customer_module\Controller\CustomerController
 */

class CustomerController extends ControllerBase{

    public function links(){

        // Go to block admin page /admin/structure/blocks
        $url1 = Url::fromRoute('block.admin_display');
        $link1 = Link::fromTextAndUrl(t('Go to block admin page'), $url1);
        $list[]=$link1;
        // Go to content admin page /admin/content
        $url2 = Url::fromRoute('system.admin_content');
        $link2 = Link::fromTextAndUrl(t('Go to admin content'), $url2);
        $list[]=$link2;
        // Go to user admin page content /admin/people
        $url3 = Url::fromRoute('entity.user.collection');
        $link3 = Link::fromTextAndUrl(t('Go to user collections'), $url3);
        $list[]=$link3;
        // Go to frontpage /
        $url4 = Url::fromRoute('<front>');
        $link4 = Link::fromTextAndUrl(t('Go to frontpage'), $url4);
        $list[]=$link4;
        // Go to BC site https://bc.fi
        $url5 = Url::fromUri('https://bc.fi');
        $link_options=[
            'attributes'=>[
                'target'=>'_blank',
                'title'=> 'Links to external website',
            ],
        ];
        $url5->setOptions($link_options);
        $link5 = Link::fromTextAndUrl(t('Go to BC site'), $url5);
        $list[]=$link5;

        // Mount the render output
        $output['customer_links']=[
            '#theme' => 'item_list',
            '#items'=> $list,
            '#title'=> $this->t('Customer links'),
        ];

        return $output;
    }
}
<?php

/**
 * NpEditThisButton
 * Copyright 2011 Bob Ray
 *
 * @version Version 1.0.0 Beta-1
 *
 * NpEditThisButton is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * NpEditThisButton is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * NewsPublisher; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package newspublisher
 * @subpackage npeditthisbutton
 * @author Bob Ray <http://bobsguides.com>

 *
 * The NpEditThisButton snippet presents a button in the front end for
 * editing resources. Clicking on the button launches NewsPublisher
 * for the current page.
 *
 * @param $npId (int) - ID of newspublisher page (set automatically on first run).
 * @param $noShow - Comma-separated list of IDs of documents
 *      on which the button should not be displayed. Defaults to
 *      home page, and NewsPublisher page.
 * @param $bottom (optional) - distance from bottom of window to place
 *      button. Can be in any legal CSS format. Defaults to `20%`.
 * @param $right (optional) - distance from right of window to place
 *      button. Can be in any legal CSS format. Defaults to `20%`.
 * @param $buttonCaption (optional -- not actually a parameter) -
 *      Caption for edit button.
 *      Defaults to np_edit language string or "Edit" if empty.
 * @param $language (optional) - Language to use for error messages.
 * @param $debug (optional) - Displays the button on all pages with
 *      either the $buttonCaption, or a message explaining why it
 *      would not be shown.
 *
 */


$language = $modx->getOption('language', $scriptProperties, null);
$language = $language ? $language . ':' : '';
$modx->lexicon->load($language . 'newspublisher:button');

/* Caption for edit button  */
$debug = $modx->getOption('debug', $scriptProperties, false);
$buttonCaption = $modx->lexicon('np_edit');
$buttonCaption = empty($buttonCaption) ? 'np_edit' : $buttonCaption;
$bottom = empty($scriptProperties['bottom']) ? '20%' : $bottom;
$right = empty($scriptProperties['right']) ? '20%' : $right;

/* value will be unchanged if there are no errors  */
$value = $buttonCaption;

$npId = $modx->getOption('np_id', $scriptProperties, '');

/* set the np_id property to the ID of the NewsPublisher page
 * on first run if possible, error message if not */
if (empty($npId)) {
    $npObj = $modx->getObject('modResource', array('pagetitle' => 'NewsPublisher'));
    $success = true;
    if ($npObj) {
        $npId = $npObj->get('id');
        $npObj = $modx->getObject('modSnippet', array('name' => 'NpEditThisButton'));
        if ($npObj) {
            $props = array(
                array(
                    'name' => 'np_id',
                    'desc' => 'np_id_desc',
                    'type' => 'numberfield',
                    'options' => '',
                    'value' => $npId,
                    'lexicon' => 'newspublisher:button',

                ),);
            if ($npObj->setProperties($props, true)) {
                $npObj->save();
                unset($npObj);
            } else {
                $success = false;
            }

        } else {
            $success = false;
        }
    } else {
        $success = false;
    }
    /* Failed - turn on debug to error message will display in button */
    if (!$success) {
        $value = $modx->lexicon('np_no_np_id');
        $debug = true;
    }
}
$modx->setPlaceholder('np_id', $npId);

/* check permissions on current page */
if (!$modx->hasPermission('edit_document')) {
    $value = $modx->lexicon('np_no_edit_document_permission');
}

if (!$modx->hasPermission('save_document')) {
    $value = $modx->lexicon('np_no_context_save_document_permission');
}

if (!$modx->resource->checkPolicy('save')) {
    $value = $modx->lexicon('np_no_resource_save_document_permission');
}
/* Don't show on the the home page */
$id = $modx->resource->get('id');
if ($id == $modx->getOption('site_start')) {
    $value = $modx->lexicon('np_no_edit_home_page');
}
/* Don't show if current page is in the noShow list */
$noShow = $modx->getOption('noShow', $scriptProperties, '');
if (empty($noShow)) {
    $noShow = $npId . ',' . $modx->getOption('site_start');
}
$hidden = explode(',', $noShow);
$hidden[] = $npId;
if (in_array($modx->resource->get('id'), $hidden)) {
    $value = 'In noShow list';
}

/* create and return the form */
$output = '<form action="[[~[[+np_id]]]]" method="post" class="np_button_form" style="position:fixed;bottom:' . $bottom . ';right:' . $right . '">';
$output .= "\n" . '<input type = "hidden" name="np_existing" value="true" />';
$output .= "\n" . '<input type = "hidden" name="np_doc_id" value="' . $modx->resource->get('id') . '"/>';
$output .= "\n" . '<input type="submit" class = "np_edit_this_button" name="submit" value="' . $value . '"/>';
$output .= "\n" . '</form>';

/* Not OK -- don't show button unless debug is on */
if (($value != $buttonCaption) && !$debug) {
    $output = '';
}

return $output;
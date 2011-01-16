<?php

/**
 * Default properties for the NewsPublisher snippet
 * @author Bob Ray
 * 1/15/11
 *
 * @package newspublisher
 * @subpackage build
 */

$properties = array(
    array(
        'name' => 'aliastitle',
        'desc' => 'np_aliastitle_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => '1',
        'lexicon' => 'newspublisher:properties',
    ),
     array(
        'name' => 'aliasprefix',
        'desc' => 'np_aliasprefix_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '1',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'badwords',
        'desc' => 'np_badwords_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'booltpl',
        'desc' => 'np_booltpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'cacheable',
        'desc' => 'np_cacheable_desc',
        'type' => 'list',
        'options' => array(
            array(
                'name' => 'System Default',
                'value' => 'System Default',
                'menu' => '',
            ),
            array(
                'name' => 'Yes',
                'value' => 'Yes',
                'menu' => '',
            ),
            array(
                'name' => 'No',
                'value' => 'No',
                'menu' => '',
            ),
            array(
                'name' => 'Parent',
                'value' => 'Parent',
                'menu' => '',
            ),
        ),
        'value' => 'System Default',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'cancelid',
        'desc' => 'np_cancelid_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => '0',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'clearcache',
        'desc' => 'np_clearcache_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => '1',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'tinywidth',
        'desc' => 'np_tinywidth_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'tinyheight',
        'desc' => 'np_tinyheight_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'cssfile',
        'desc' => 'np_cssfile_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'datetpl',
        'desc' => 'np_datetpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'errortpl',
        'desc' => 'np_errortpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'fielderrortpl',
        'desc' => 'np_fielderrortpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'footertpl',
        'desc' => 'np_footertpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'groups',
        'desc' => 'np_groups_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'headertpl',
        'desc' => 'np_headertpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'hidemenu',
        'desc' => 'np_hidemenu_desc',
        'type' => 'list',
        'options' => array(
            array(
                'name' => 'System Default',
                'value' => 'System Default',
                'menu' => '',
            ),
            array(
                'name' => 'Yes',
                'value' => 'Yes',
                'menu' => '',
            ),
            array(
                'name' => 'No',
                'value' => 'No',
                'menu' => '',
            ),
            array(
                'name' => 'Parent',
                'value' => 'Parent',
                'menu' => '',
            ),
        ),
        'value' => 'System Default',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'initdatepicker',
        'desc' => 'np_initdatepicker_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => '1',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'initrte',
        'desc' => 'np_initrte_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => '0',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'intpl',
        'desc' => 'np_inttpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'language',
        'desc' => 'np_language_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'listboxmax',
        'desc' => 'np_listboxmax_desc',
        'type' => 'numberfield',
        'options' => '',
        'value' => '8',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'listoptiontpl',
        'desc' => 'np_listoptiontpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'multiplelistboxmax',
        'desc' => 'np_multiplelistboxmax_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '20',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'optionoutertpl',
        'desc' => 'np_optionoutertpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'optiontpl',
        'desc' => 'np_optiontpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'outertpl',
        'desc' => 'np_outertpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'parentid',
        'desc' => 'np_parentid_desc',
        'type' => 'numberfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'postid',
        'desc' => 'np_postid_desc',
        'type' => 'numberfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'prefix',
        'desc' => 'np_prefix_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'published',
        'desc' => 'np_published_desc',
        'type' => 'list',
        'options' => array(
            array(
                'name' => 'System Default',
                'value' => 'System Default',
                'menu' => '',
            ),
            array(
                'name' => 'Yes',
                'value' => 'Yes',
                'menu' => '',
            ),
            array(
                'name' => 'No',
                'value' => 'No',
                'menu' => '',
            ),
            array(
                'name' => 'Parent',
                'value' => 'Parent',
                'menu' => '',
            ),
        ),
        'value' => 'System Default',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'required',
        'desc' => 'np_required_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'pagetitle,content',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'richtext',
        'desc' => 'np_richtext_desc',
        'type' => 'list',
        'options' => array(
            array(
                'name' => 'System Default',
                'value' => 'System Default',
                'menu' => '',
            ),
            array(
                'name' => 'Yes',
                'value' => 'Yes',
                'menu' => '',
            ),
            array(
                'name' => 'No',
                'value' => 'No',
                'menu' => '',
            ),
            array(
                'name' => 'Parent',
                'value' => 'Parent',
                'menu' => '',
            ),
        ),
        'value' => 'System Default',
        'lexicon' => 'newpublisher:properties',
    ),
    array(
        'name' => 'rtcontent',
        'desc' => 'np_rtcontent_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => '0',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'rtsummary',
        'desc' => 'np_rtsummary_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => '0',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'searchable',
        'desc' => 'np_searchable_desc',
        'type' => 'list',
        'options' => array(
            array(
                'name' => 'System Default',
                'value' => 'System Default',
                'menu' => '',
            ),
            array(
                'name' => 'Yes',
                'value' => 'Yes',
                'menu' => '',
            ),
            array(
                'name' => 'No',
                'value' => 'No',
                'menu' => '',
            ),
            array(
                'name' => 'Parent',
                'value' => 'Parent',
                'menu' => '',
            ),
        ),
        'value' => 'System Default',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'show',
        'desc' => 'np_show_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'pagetitle,longtitle,hidemenu,published,description,menutitle,pub_date,unpub_date,introtext,content',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'readonly',
        'desc' => 'np_readonly_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    
    array(
        'name' => 'template',
        'desc' => 'np_template_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'texttpl',
        'desc' => 'np_texttpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'textmaxlength',
        'desc' => 'np_textmaxlength_desc',
        'type' => 'numberfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'intmaxlength',
        'desc' => 'np_intmaxlength_desc',
        'type' => 'numberfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'newspublisher:properties',
    ),
    array(
        'name' => 'hoverhelp',
        'desc' => 'np_hoverhelp_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => '1',
        'lexicon' => 'newspublisher:properties',
    ),
);

return $properties;
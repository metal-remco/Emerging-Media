﻿/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    config.toolbar_Full =
    [
    {
        name: 'basicstyles', 
        items : [ 'Bold','Italic','Underline','Strike',]
    },
{
        name: 'paragraph', 
        items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote',
        '-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock', ]
    },
{ name: 'styles', items : [ 'FontSize' ] }
	
    ];
};

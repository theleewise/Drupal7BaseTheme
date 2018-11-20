/*
Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

/*
 * This file is used/requested by the 'Styles' button.
 * The 'Styles' button is not enabled by default in DrupalFull and DrupalFiltered toolbars.
 */
if(typeof(CKEDITOR) !== 'undefined') {
    CKEDITOR.addStylesSet( 'drupal',
    [
            /* Block Styles */
        //     { name : 'Paragraph'		, element : 'p' },
        //     { name : 'Heading 1'		, element : 'h1' },
        //     { name : 'Heading 2'		, element : 'h2' },
        //     { name : 'Heading 3'		, element : 'h3' },
        //     { name : 'Heading 4'		, element : 'h4' },
        //     { name : 'Heading 5'		, element : 'h5' },
        //     { name : 'Heading 6'		, element : 'h6' },
        //     { name : 'Preformatted Text'        , element : 'pre' },
        //     { name : 'Address'			, element : 'address' },
            
            /* Inline Styles */
        //     { name : 'Strong'			, element : 'strong', overrides : 'b' },
        //     { name : 'Emphasis'			, element : 'em'	, overrides : 'i' },
        //     { name : 'Underline'		, element : 'u' },
        //     { name : 'Strikethrough'	        , element : 'strike' },
        //     { name : 'Subscript'		, element : 'sub' },
        //     { name : 'Superscript'		, element : 'sup' },
        { name: 'Button', element: 'a', attributes: { 'class': 'btn' } },
           
        /* Object Styles */
        { name: 'Image Right', type: 'widget', widget: 'image', attributes: { 'class': 'image-right' } },
        { name: 'Image Left', type: 'widget', widget: 'image', attributes: { 'class': 'image-left' } }

    ]);
}
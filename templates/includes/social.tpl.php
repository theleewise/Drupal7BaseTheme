<?php if( count($social) ): ?>
    <div class="social-links">
        <?php foreach($social as $x) {
            print
                '<a class="social-link social-link--' . strtolower($x['name']) . '" href="'. $x['url'] . $x['val'] .'" target="_blank">' .
                '<svg class="icon-svg" height="1em" width="1em"><use xlink:href="#icon-' . strtolower($x['name']) . '"></use></svg>' .
                '<span class="visually-hidden">' . $x['text'] . '</span>' .
                '</a>'
            ;
        } ?>
    </div>
<?php endif; ?>
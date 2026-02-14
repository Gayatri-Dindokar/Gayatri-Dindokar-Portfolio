<?php
class Menu_With_Description extends Walker_Nav_Menu {

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {

        $output .= '<li class="nav-item">';

        $output .= '<a class="nav-link" href="' . esc_url($item->url) . '">';
        $output .= esc_html($item->title);

        if ($item->description) {
            $output .= '<small class="d-block text-muted">'
                    . esc_html($item->description) .
                    '</small>';
        }

        $output .= '</a></li>';
    }
}

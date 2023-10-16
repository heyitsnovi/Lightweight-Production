<?php
use Core\Url;
use Core\Redirector as Redir;
Use Core\Sessionizer;
use Core\Render;
use voku\helper\AntiXSS;

function base_url($ext = '') {

    $url_instance = new Url();

    return $ext !== '' ? $url_instance->base_url() . $ext : $url_instance->base_url();

}

function redirect($url) {

    $redir_obj = new Redir();

    return $redir_obj->redirect($url);
}


function http_method() {

    return anti_xss($_SERVER['REQUEST_METHOD']);
}

function set_session($key, $value) {

    $sessionizer = new Sessionizer();

    $sessionizer->set_session($key, $value);

}

function set_flash_data($key, $value) {

    $sessionizer = new Sessionizer();

    $sessionizer->set_flash($key, $value);

}

function get_session($key) {

    $sessionizer = new Sessionizer();

    return $sessionizer->get_session($key);

}

function get_flash($key) {

    $sessionizer = new Sessionizer();

    return $sessionizer->get_flash($key);

}


function has_session($key){

     $sessionizer = new Sessionizer();

    return $sessionizer->hasSession($key);
}

function anti_xss($input) {

    $xss_cleaner = new AntiXSS();

    return $xss_cleaner->xss_clean($input);
}

function input_value($key) {

    $sessionizer = new Sessionizer();

    $value = $sessionizer->input_value($key);

    return anti_xss($value);
}

function is_ajax() {

    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
}

function base_path() {

    $basepath = dirname(__FILE__, 2);

    return anti_xss($basepath);
}

function form_dropdown($data = '', $options = array() , $selected = array() , $extra = '') {

    $defaults = array();

    if (is_array($data)) {
        if (isset($data['selected'])) {
            $selected = $data['selected'];
            unset($data['selected']);
        }

        if (isset($data['options'])) {
            $options = $data['options'];
            unset($data['options']);
        }
    }
    else {
        $defaults = array(
            'name' => $data
        );
    }

    is_array($selected) or $selected = array(
        $selected
    );
    is_array($options) or $options = array(
        $options
    );

    if (empty($selected)) {
        if (is_array($data)) {
            if (isset($data['name'], $_POST[$data['name']])) {
                $selected = array(
                    $_POST[$data['name']]
                );
            }
        }
        elseif (isset($_POST[$data])) {
            $selected = array(
                $_POST[$data]
            );
        }
    }

    $extra = _attributes_to_string($extra);

    $multiple = (count($selected) > 1 && stripos($extra, 'multiple') === false) ? ' multiple="multiple"' : '';

    $form = '<select ' . rtrim(_parse_form_attributes($data, $defaults)) . $extra . $multiple . ">\n";

    foreach ($options as $key => $val) {
        $key = (string)$key;

        if (is_array($val)) {
            if (empty($val)) {
                continue;
            }

            $form .= '<optgroup label="' . $key . "\">\n";

            foreach ($val as $optgroup_key => $optgroup_val) {
                $sel = in_array($optgroup_key, $selected) ? ' selected="selected"' : '';
                $form .= '<option value="' . anti_xss($optgroup_key) . '"' . $sel . '>' . (string)$optgroup_val . "</option>\n";
            }

            $form .= "</optgroup>\n";
        }
        else {
            $form .= '<option value="' . anti_xss($key) . '"' . (in_array($key, $selected) ? ' selected="selected"' : '') . '>' . (string)$val . "</option>\n";
        }
    }

    return $form . "</select>\n";
}

function _attributes_to_string($attributes) {
    if (empty($attributes)) {
        return '';
    }

    if (is_object($attributes)) {
        $attributes = (array)$attributes;
    }

    if (is_array($attributes)) {
        $atts = '';

        foreach ($attributes as $key => $val) {
            $atts .= ' ' . $key . '="' . $val . '"';
        }

        return $atts;
    }

    if (is_string($attributes)) {
        return ' ' . $attributes;
    }

    return false;
}

function _parse_form_attributes($attributes, $default) {
    if (is_array($attributes)) {
        foreach ($default as $key => $val) {
            if (isset($attributes[$key])) {
                $default[$key] = $attributes[$key];
                unset($attributes[$key]);
            }
        }

        if (count($attributes) > 0) {
            $default = array_merge($default, $attributes);
        }
    }

    $att = '';

    foreach ($default as $key => $val) {
        if ($key === 'value') {
            $val = anti_xss($val);
        }
        elseif ($key === 'name' && !strlen($default['name'])) {
            continue;
        }

        $att .= $key . '="' . $val . '" ';
    }

    return $att;
}

function title_to_slug($title) {
    
    $slug = strtolower(str_replace(' ', '-', $title));
    
    $slug = preg_replace('/[^\w\-]/', '', $slug);
    
    $slug = preg_replace('/\-+/', '-', $slug);

    $slug = trim($slug, '-');
    
    return $slug;
}

function postData($index_name){

    $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    return $_POST[$index_name];
}

function getData($index_name){

    $_GET  = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);

    return $_GET[$index_name];
}


function current_url(){
    
    $url_instance = new Url();
    return $url_instance->current_url();
}
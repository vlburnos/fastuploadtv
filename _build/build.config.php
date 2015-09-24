<?php

    define('PKG_NAMESPACE', 'FastUploadTV');
    define('PKG_NAME', 'FastUploadTV');
    define('PKG_NAME_LOWER',str_replace(' ','',strtolower(PKG_NAME)));
    define('PKG_VERSION','2.0.0');
    define('PKG_RELEASE','beta');



    define('PKG_ROOT',dirname(dirname(__FILE__)).'/');
    define('PKG_CORE',PKG_ROOT.'core/components/'.PKG_NAMESPACE.'/');
    define('PKG_ASSETS',PKG_ROOT.'assets/components/'.PKG_NAMESPACE.'/');
    define('PKG_COMMIT',Tools::getGitCommitId(PKG_ROOT));
    
    /* Define paths */
    if (isset($_SERVER['MODX_BASE_PATH'])) {
        $MODX_BASE_PATH = $_SERVER['MODX_BASE_PATH'];
    }
    elseif (file_exists(dirname(dirname(dirname(__FILE__))) . '/core')) {
        $MODX_BASE_PATH = dirname(dirname(dirname(__FILE__))) . '/';
    }
    else {
        $MODX_BASE_PATH = dirname(dirname(dirname(dirname(__FILE__)))) . '/';
    }
    
    require_once $MODX_BASE_PATH . 'config.core.php';
    require_once $MODX_BASE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';

    /* Package sources */
    $sources = array(
        'model'         => PKG_CORE . 'model/',
        'root'          => PKG_ROOT,
        'build'         => PKG_ROOT . '_build/',
        'data'          => PKG_ROOT . '_build/data/',
        'resolvers'     => PKG_ROOT . '_build/resolvers/',
        'plugins'       => PKG_ROOT . 'core/components/'    . PKG_NAMESPACE . '/elements/plugins/',
        'lexicon'       => PKG_ROOT . 'core/components/'    . PKG_NAMESPACE . '/lexicon/',
        'docs'          => PKG_ROOT . 'core/components/'    . PKG_NAMESPACE . '/docs/',
        'elements'      => PKG_ROOT . 'core/components/'    . PKG_NAMESPACE . '/elements/',
        'source_assets' => PKG_ROOT . 'assets/components/'  . PKG_NAMESPACE,
        'source_core'   => PKG_ROOT . 'core/components/'    . PKG_NAMESPACE
    );


    /* xPDO Schemas */
    $schemas = array(
        $sources['model'].PKG_NAMESPACE.'.mysql.schema.xml'
    );

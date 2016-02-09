protected static function initializeFormats()
{
    static::$formats = array(
        'html' => array('text/html', 'application/xhtml+xml'),
        'txt'  => array('text/plain'),
        'js'   => array('application/javascript', 'application/x-javascript', 'text/javascript'),
        'css'  => array('text/css'),
        'json' => array('application/json', 'application/x-json'),
        'xml'  => array('text/xml', 'application/xml', 'application/x-xml'),
        'rdf'  => array('application/rdf+xml'),
        'atom' => array('application/atom+xml'),
        'rss'  => array('application/rss+xml'),
    );
}

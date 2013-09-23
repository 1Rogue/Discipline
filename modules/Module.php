<?

/**
 * Abstract module object for loading modules
 * 
 * @author 1Rogue
 */
interface Module {
    
    public abstract function getHeader();
    public abstract function getContent();
    public abstract function getFooter();
    public abstract function getName();
    
}

?>

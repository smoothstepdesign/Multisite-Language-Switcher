
#!/bin/bash

phpdoc run -t . -d ../master/ --ignore="index.php,tests/*" --title="Multisite Language Switcher" --template zend

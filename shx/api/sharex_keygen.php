<?php include("sharex_INC_functions.php"); header("Content-Type: text/plain"); ?>
             This does not register a free API key for you.
             This is not a public ShareX server.
             This simply makes it easier for the operators to set up new API keys by generating them automatically.
             
             
             That being said, the generated API key is...
             <?=random_str(100);?>
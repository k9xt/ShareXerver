# Setup
1. Upload shx folder to your website. It must be accessible at https://your-domain.com/shx/.
2. TURN OFF DIRECTORY INDEXES. THIS IS VERY IMPORTANT. [for apache](https://help.dreamhost.com/hc/en-us/articles/215747718-Control-directory-indexes-with-an-htaccess-file#Turning_off_directory_indexes) [for nginx](https://ubuntushell.com/manage-directory-listing-on-nginx/#:~:text=To%20disable%20it%2C%20you%20need,from%20your%20Nginx%20configuration%20file.&text=Once%20done%2C%20make%20sure%20to,sudo%20systemctl%20restart%20nginx)
3. Open [WEBSITE]/shx/api/sharex\_INC_config.php and modify options.
4. Open [WEBSITE]/shx/api/sharex\_keys.php and change the default API key. You can generate one in your browser by visiting https://your-domain.com/shx/api/sharex_keygen.php.
5. Import ShareXerverTemplate.sxcu to ShareX and then modify the uploader to fit your domain & api key.
6. Done!

### More
- I apologize for my messy code. It works though.
- Made for PHP 8.4, probably works on some older versions.

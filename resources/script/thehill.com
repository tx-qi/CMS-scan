cmsmap.py https://thehill.com/ -o thehill.com -v -F
[-] Date & Time: 22/06/2021 11:03:45
[I] Threads: 5
[-] Target: https://thehill.com (151.101.130.217)
[v] Requesting Not Existing Pages ...
[v] Checking if the website is in HTTPS ...
[v] Checking headers ...
[I] Server: nginx
[I] X-Powered-By: PHP/7.4.19
[L] X-Generator: Drupal 7 (http://drupal.org)
[L] X-Frame-Options: Not Enforced
[I] X-Content-Security-Policy: Not Enforced
[v] Checking Robots.txt File ...
[L] Robots.txt Found: https://thehill.com/robots.txt
[v] Detecting type of CMS ...
[v] WordPress Config File Not Found: https://thehill.com/wp-config.php
[v] Joomla Config File Not Found: https://thehill.com/configuration.php
[v] Drupal Config File Not Found: https://thehill.com/sites/default/settings.php
[v] Moodle Config File Not Found: https://thehill.com/config.php
[I] CMS Detection: Drupal
[v] Checking Drupal version ...
[I] Drupal Version: 7.80
[v] Checking Drupal theme
[I] Drupal Theme: thehill
[v] Searching vulnerable theme (thehill) from local ExploitDB repository ...
[v] Checking Drupal old config files
[-] Enumerating Drupal Usernames via "Views" Module...
[-] Enumerating Drupal Usernames via "/user/"...
[v] Checking Autocomplete Off on the login page ...
[I] Autocomplete Off Not Found: https://thehill.com/user/
[v] Checking Drupal default files
[-] Drupal Default Files: 
[-] Drupal is likely to have a large number of default files
[-] Would you like to list them all?
[-] Checking interesting directories/files ... 
[ERROR] Interrupt caught. CMSmap paused. Do you really want to exit?
[-] Bye! Quitting.. 
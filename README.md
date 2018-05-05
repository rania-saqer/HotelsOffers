# HotelsOffers
This is a website  show  best Hotel offers 
xampp is simple and lightweight solution that allows you to create a local web server for testing purposes :

1- Go to the Apache Friends website and download XAMPP.
2- In the next window, you will be asked to select which components of the software you would like to 
   install and which ones you don’t want. Some options, such as Apache and PHP are essential to running the
   software and will at automatically installed, so they are grayed out so you can’t select them.
3- Next, select the folder where you would like to install XAMPP on your machine.
4- In the next window, you’ll be asked whether you would like to install Bitnami for XAMPP, which offers free tools for installing WordPress, Drupal, and Joomla! on top of XAMPP.
   we don’t need free installers, untick “Learn more about Bitnami for XAMPP” and click Next.
5- After going through all those initial installation steps, XAMPP is now finally ready to install. Click Next.
6- Once installed, you’ll be asked whether you would like to start the XAMPP Control Panel, which provides an interface for running your localhost environment. Leave this option ticked and click Finish.
7- The Control Panel will automatically open, but if you unchecked the option in the previous window, you can go to the XAMPP folder on your computer and open XAMPP Control Panel instead.

If the installation process went well and everything is running smoothly, the control panel will open with black and blue text updates at the bottom. But if there are issues…
8- You can check if your new local server is installed by visiting http://localhost in your browser.
9- Use https://github.com/rania-saqer/HotelsOffers.git and checkout using git or download zip in htdocs folder in xampp directory .
10- then you can define virtual host  or access it by localhost/folderName 

I faced problem with  PHP - SSL certificate error:  cURL cannot conect to HTTPS hosts , when i consumes th API ,
the solution was :
1- Download the certificate bundle, i add it in the project. Copy it and add it to your xampp directory ,ex: E:/xampp/cacert.pem 
2- Add these lines to your cert in both php.ini files:
   curl.cainfo="C:/wamp/cacert.pem"
   openssl.cafile="C:/wamp/cacert.pem"
3- Restart xampp services.

 

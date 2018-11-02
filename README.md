# Share X Upload Script for PHP
This script let you upload files to your (ShareX) Server with PHP.

## How to use the Script?
#### Server Part:
```
1. Download and unzip the files to the root Directory of the Server.
2. Edit the config.php to your needs.
3. Create the Folder for the uploads (with your custom config)
```

#### ShareX Part:
```
1. Open Target -> Targetsettings and scroll down
2. Go to custom uploaders and add a new
3. Leave the settings and add Request URL: YOUROWNSERVER COM/upload.php
4. File form name: "file" (without quotation marks)
5. Arguments:
    - key -> Yoursecretkey from the Config
    - name -> the name of the file if you uploaded it (use %rx%rx%rx%rx%rx for 5 random characters and numbers)
```
Now you can test your settings, that should be it. Have fun.

If there is any Probleme feel free to message me:
Twitter: JonathanDOTexe
Mail:    Get it from JonathanB.de

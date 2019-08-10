# Share X Upload Script for PHP
This script let you upload files to your (ShareX) Server with PHP.

## How to use the Script?
#### Server Part:
```
1. Download and unzip the files to the root Directory of the Server.
2. Edit the config.php to your needs.
3. Create the Folder for the uploads (with your custom config, maybe you have to adjust the permissions for the folder)
```

#### ShareX Part:
```
1. Open Destinations -> Custom uploader settings...
2. Add a new Uploader
3. Select on the Destination type settings: Image uploader, Text uploader, File uploader
4. URL: thats the link to your server & the upload.php (e.g. https://yourdomain.com/upload.php)
5. "File form name:" = "file" (without quotation marks)
6. Body:
    - key -> Yoursecretkey from the Config
    - name -> the name of the file if you uploaded it (use %rx%rx%rx%rx%rx for 5 random characters and numbers)
```
Now you can test your settings, that should be it. Have fun.

If there is any Probleme feel free to message me:
Twitter: JonathanDOTexe
Mail:    Get it from JonathanB.de

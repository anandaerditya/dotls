## Dotls

![Static Badge](https://img.shields.io/badge/1.0.0.r.1-ls_version?style=for-the-badge&label=Version&labelColor=%23000000&color=%23f35b54)
![Static Badge](https://img.shields.io/badge/8.x_and_up-ls_version?style=for-the-badge&label=Min%20pHP%20Version&labelColor=%23000000&color=%2300b89f)
![Static Badge](https://img.shields.io/badge/MIT-ls_licence?style=for-the-badge&label=Licence&labelColor=%23000000&color=%23f1c700)
![Static Badge](https://img.shields.io/badge/anandaerditya-ls_author?style=for-the-badge&label=Author&labelColor=%23000000&color=%232dcdd2)

### Description
Dotls, a PHP package for convert a `.ls` configuration file into readable config array.

### Package Description
- Package Name : dotls
- Author : [Ananda Erditya ( anandaerditya )](https://github.com/anandaerditya)
- Github URL : [https://github.com/anandaerditya/dotls](https://github.com/anandaerditya/dotls)
- Language : PHP
- Licence : MIT

### Requirements
- PHP Version 8.0 or higher
- PHP fileinfo extension

### Installing Package
Use the following command to install the package via Composer Dependency Manager.

    composer require anandaerditya/dotls


### Using The Package
1. #### Create your `.ls` configuration file.
   You can create your own `.ls` file to any directory inside your project. Make sure your `.ls`file \
   contains at least one pair syntax as follows :

       foo:value
       foo_bar:value

2. #### Register `.ls` configuration file.
   Register your `.ls` file using  `register()` method as follows :

        $dotls = ( new Dotls() )->register('path/to/your/.ls');

3. #### Using your `.ls` configuration file
   Use `ls()` method to load your configuration into your project as follows :

        ls('foo');
        ls('foo_bar');

[![Stable Version](https://img.shields.io/packagist/v/putyourlightson/craft-autocomplete?label=stable)]((https://packagist.org/packages/putyourlightson/craft-autocomplete))
[![Total Downloads](https://img.shields.io/packagist/dt/putyourlightson/craft-autocomplete)](https://packagist.org/packages/putyourlightson/craft-autocomplete)

# Autocomplete for Craft CMS

Provides autocompletion for Craft CMS and plugins in Twig templates. 
 
Currently works with **PhpStorm only**, as VSCode does not support intellisense for Twig extensions.

Adapted from `FauxTwigExtension.php` by nystudio107 as documented in the article:  
https://nystudio107.com/blog/auto-complete-craft-cms-3-apis-in-twig-with-phpstorm

![screenshot-sprig](https://user-images.githubusercontent.com/57572400/125837278-4f8a0ac2-1159-420c-b692-6962c5f9661e.png)

## Usage

Install the package using composer.

```
composer require putyourlightson/craft-autocomplete
```

Ensure that the Symfony plugin is installed and enabled in PhpStorm:  
https://plugins.jetbrains.com/plugin/7219-symfony-plugin
    
Once your IDE indexes the files, autocompletion for Craft and supported plugins will immediately become available in your Twig templates.

![screenshot](https://user-images.githubusercontent.com/57572400/125784167-618830ae-e475-4faf-81d3-194ad7ce3a08.png)

## Contributing

You can contribute autocompletion for third-party plugins that are available in the plugin store. To do so, copy the `src/putyourlightson` folder and rename it to your GitHub username. Modify the classes accordingly and add a `@mixin` for your variable to the main `AutocompleteVariable` class.

Ensure you follow the structure already in place, test that autocompletion works and submit a pull request.

![screenshot-mixins](https://user-images.githubusercontent.com/57572400/125917480-cf4ca8f8-33ad-4f32-ae19-e05d8cfba7d9.png)

---

Created by [PutYourLightsOn](https://putyourlightson.com/).

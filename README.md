[![Stable Version](https://img.shields.io/packagist/v/putyourlightson/craft-autocomplete?label=stable)]((https://packagist.org/packages/putyourlightson/craft-autocomplete))
[![Total Downloads](https://img.shields.io/packagist/dt/putyourlightson/craft-autocomplete)](https://packagist.org/packages/putyourlightson/craft-autocomplete)

# Autocomplete for Craft CMS

Provides autocompletion for Craft and plugins in Twig templates. 
 
Adapted from `FauxTwigExtension.php` by nystudio107 as documented in the article: https://nystudio107.com/blog/auto-complete-craft-cms-3-apis-in-twig-with-phpstorm

## Usage

Install the package using composer.

```
composer require putyourlightson/craft-autocomplete
```

Ensure that the appropriate Symfony plugin is installed and enabled in your IDE.  
- PhpStorm: https://plugins.jetbrains.com/plugin/7219-symfony-plugin  
- VSCode: https://marketplace.visualstudio.com/items?itemName=TheNouillet.symfony-vscode
    
Once your IDE indexes the `Autocomplete.php` file, autocompletion will immediately become available in your Twig templates.

![screenshot](https://user-images.githubusercontent.com/57572400/125784167-618830ae-e475-4faf-81d3-194ad7ce3a08.png)

## Contributing

You can contribute autocompletion for third-party plugins that are available in the plugin store. To do so, copy the `plugins/putyourlightson` folder and rename it to your GitHub username. Modify the classes accordingly and submit a pull request, ensuring you follow the structure already in place.  

---

Created by [PutYourLightsOn](https://putyourlightson.com/).

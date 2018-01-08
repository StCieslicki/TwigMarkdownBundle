# Twig Markdown Extension Bundle

Symfony2 bundle wrapping [aptoma/twig-markdown](https://github.com/aptoma/twig-markdown/tree/1.0.0).

## Installation

Add to `composer.json`

    {
        "require": {
            "stahoos/twig-markdown-bundle": "dev-master"
        }
    }
    
Register the bundle in app/AppKernel.php

    $bundles = array(
        // ...
        new Stahoos\TwigMarkdownBundle\StahoosTwigMarkdownBundle(),
    );

## Usage

### As a filter
    
    {{ "# Heading Level 1"|markdown }}

### As a tag

    {% markdown %}
    # Heading Level 1

    * List item 1
    * List item 2
        * Sub List Item
            * Sub Sub List Item
    {% endmarkdown %}

# Plugdation 
***A starting foundation for your wordpress plugin.*** 

# Opening
***Why use this as your next plugin boilerplate.*** 

While this plugin boilerplate can be used as a starting point for traditional one-off plugins the intention behind it is
to be used as a wordpress sites main code repository. The reader may be use to using a theme as a sites main codebase 
or they may be in the practice of using multiple plugins, each housing different isolated fragments of code. The pros 
and cons of these two strategies will be explained along with how Plugdation attempts to nullify the cons and keep the 
pros. 

Using a theme for centralized code makes sharing package manager installations easier but makes theme
switching harder and violates the intent of wordpress themes as the 'skin' of a site with very little or no business 
logic.On the other hand, using multiple plugins makes sharing package files harder and often can create duplicate code 
when each plugin is compiled. A prime example of this in modern Wordpress development is compiling Gutenberg blocks with 
the `@wordpress/*` NPM packages. If each plugin is in charge of a single domain then it also must maintain 
its own Gutenberg blocks, thus each plugin compiles `@wordpress/*` scripts and the site has multiple scoped instances 
of the same code. Wordpress currently exports these packages into the global scope with the `wp` object to avoid such 
duplication but modern javascript development favors the use of NPM packages and not exposing code as global objects. 

Plugdation aims to provide a way of organizing code in a single plugin but maintain the same single use of responsibility
that multiple plugins traditionally fulfilled. This is possible by utilizing PHP namespaces and javascript ES6 modules.
Common resources for each domain of a codebase such as styles, web components, and code abstractions live 
in the main plugin directory or the `inc` folder. Discrete codebases for a specific domain will live inside 
the `app` directory. This leaves room for the plugin author to use directory structure how they see fit in the app 
directory either grouping by domain or capabilities.

##Example: Grouping By Domain
    app
    │   README.md
    │   index.php    
    │
    └───woocommerceInterface
    │   │   index.php
    │   │   ...
    │   └───src
    │       │   style.css
    │       │   index.js
    │
    └───yoastInterface
    │   │   index.php
    │
    └───forms
    │   │   index.php
    │   └───blocks
    │       │   index.php
    │
    └───slider
    │   │   index.php
    │   └───src
    │       │       │   style.css
    │       │       │   index.js
    │       │       │   editor.css
    │
    └───movieTaxonomy
    │   │   index.php
    │   │   ...
    │ 
    └───bookTaxonomy
    │   │   index.php
    │   │   ...
    ...

##Example: Grouping By Capabilities
    app
    │   README.md
    │   index.php    
    │
    └───hooks
    │   │   index.php
    │
    └───blocks
    │   │   index.php
    │
    └───meta
    │   │   index.php
    │   │   ...
    │
    └───endpoints
    │   │   index.php
    │   │   ...
    │
    └───taxonomies
    │   │   index.php
    │   │   ...
    │
    └───widgets
    │   │   index.php
    │   │   ...
    │
    └───src
    │   │   style.css
    │   │   index.js
    ...

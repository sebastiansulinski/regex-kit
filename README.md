# Regex Kit

Regex Kit : purpose-made handfull of methods for easy string replacement


## Usage

### Example 1

Find uri's and replace them with anchor tags.

```
use SSD\RegexKit\Factory;


echo Factory::anchor(
    'Visit documentation at http://github.com or for more info use http://google.com',
    [
        'target' => '_blank'
    ]
);
```


### Example 2

Find `@User` and replace them with anchor tags.

```
use SSD\RegexKit\Factory;


echo Factory::atUser(
    'Hey @JohnDoe, thanks for sorting this out!',
    '/user/',
    [
        'target' => '_blank',
        'title' => 'View user profile'
    ]
);
```
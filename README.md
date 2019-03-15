# Jayponents

Written by Jason den Dulk

Construct documents with heirarchical components.

### Features

- Usable with any template engine via adaptors. A PHP base template engine is
included as the default.

- Hierarchical. Components can be added to other Components
to create docuemnts of arbitrary complexity. No need for partials, layouts or
helpers as `Component` can be used for all of these roles.

- You can create custom component classes that allow you to have extra
component specific business logic that can be kept out of the template, or
handle boilerplate you dont want to have repeated in every template file.


## Requirements

PHP v7.1.0 or greater.

## Installation

```
composer require jaypha/jayponents
```

## API

### class Component

`static void setDefaultEngine(TemplateEngineAdaptor $a)`

Sets the default template engine. If none is provided, then PHP will be used.

`void setEngine(TemplateEngineAdaptor $a)`

Sets the template engine to be used for this component. If none is set, then
the default engine set via `setDefaultEngine` will be used.

`void setTemplate(string $template = null)`

Sets the template file or string (if possible)

`void setVars(array $values)`

Sets all the values.

`void set(string $name, mixed $value)`

Sets a single value

`void remove(string $name)`

Removes a value stored under $name.

`void add(mixed $value)`

Adds a value without a name. Useful when no template is being used.

`void clear()`

Removes all values.

`void display()`

Prints the contents directly to the output.

`string __toString()`

Returns the contents as a string.

### class PhpFileAdaptor

Adaptor to use PHP itself as the template engine.

### class PhpTextAdaptor

Adaptor to allow the PHP template to be passed directly as a string.

#### class TextComponent

Behaves the same as `Component` except that the template is provided directly
instead of via a file.

## License

Copyright (C) 2017-8 Jaypha.  
Distributed under the Boost Software License, Version 1.0.  
See http://www.boost.org/LICENSE_1_0.txt


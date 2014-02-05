# \Scope\Guard

## NAME

\Scope\Guard - lexically-scoped resource management, port of the Perl module [Scope::Guard](https://metacpan.org/pod/Scope::Guard)

## SYNOPSIS

```php
$handler = function() {...};
$guard   = new \Scope\Guard($handler);

// Fire the handler immediately
$guard = null;

// Detach the handler
$guard->dismiss();

// Attach the handler
$guard->dismiss(false);
```

## DESCRIPTION

his module provides a convenient way to perform cleanup or other forms of resource management at the end of a scope. It is particularly useful when dealing with exceptions: the `\Scope\Guard` constructor takes an anonymous that is guaranteed to be called even if the thread of execution is aborted prematurely. This effectively allows lexically-scoped "promises" to be made that are automatically honoured by PHP's garbage collector.

## METHODS

### __construct

`__constract(callable $handler)`

The `__construct` method creates a new `\Scope\Guard` object which calls the supplied handler when its `__destruct` method is called, typically at the end of the scope.

### dismiss

`void dismiss(bool $bool = true)`

`dismiss` detaches the handler from the `\Scope\Guard` object. This revokes the "promise" to call the handler when the object is destroyed.

The handler can be re-enabled by calling:

```
$guard->dismiss(false);
```

## THANKS TO

chocolateboy `chocolate@cpan.org`

## AUTHOR

travail

## LICENSE

This library is free software. You can redistribute it and/or modify it under the same terms as PHP itself.


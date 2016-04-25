# Usage

The session class provides restricted access to Laravel's `Store` class for _sessions_.

### Getting session values

To retrieve a session value you can use `session` _or_ `session_get`.

    {% verbatim %}
    {{ session('key') }}
    {{ session_get('key', 'Default') }}
    {% endverbatim %}

You can also pull a value out of the session store.

    {% verbatim %}
    {{ session_pull('key') }}
    {% endverbatim %}

### Checking if a session value exists

Use the `has` method to check if a session value exists.

    {% verbatim %}{{ session_has('dummy') }}{% endverbatim %} // false

### Retrieving the CSRF token

In order to post forms you need to include the CSRF token.

    {% verbatim %}
    <input name="_token" name="{{ csrf_token() }}"/>

    {{ csrf_field() }} // Same output as above
    {% endverbatim %}

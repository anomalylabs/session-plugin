# Utilisation

La classe Session permet un accès restreint à la classe `Store` pour les _sessions_.

### Lire des informations en session

Pour lire une valeur vous pouvez utiliser `session` _ou_ `session_get`.

    {% verbatim %}
    {{ session('key') }}
    {{ session_get('key', 'Information par défaut') }}
    {% endverbatim %}

Vous pouvez également lire et supprimer une valeur de la session.

    {% verbatim %}
    {{ session_pull('key') }}
    {% endverbatim %}

### Vérifier qu'une valeur existe

Utilisez la fonction `has` pour vérifier qu'une information existe.

    {% verbatim %}{{ session_has('exemple') }}{% endverbatim %} // false

### Lire le jeton de sécurité CSRF

Pour envoyer des formulaires en POST, vous devez inclure le jeton de sécurité.

    {% verbatim %}
    <input name="_token" name="{{ csrf_token() }}"/>

    {{ csrf_field() }} // Même résultat qu'au dessus.
    {% endverbatim %}
